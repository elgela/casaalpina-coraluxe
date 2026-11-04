// service-worker.js — CasaAlpina
//
// IMPORTANTE: subir este archivo a la RAÍZ del sitio (junto a index.php),
// no dentro de /js. El sitio lo registra como "./service-worker.js" o
// "/service-worker.js", y un service worker solo controla las páginas que
// están en su misma carpeta o por debajo.

const CACHE_NAME = "casaalpina-cache-v2";

// Archivos que existen en el sitio y se guardan al instalar.
// Si alguno falla, se avisa en consola pero la instalación sigue.
const PRECACHE_URLS = [
  "./",
  "./index.php",
  "./css/style.css",
  "./css/bootstrap.min.css",
  "./lib/animate/animate.min.css",
  "./js/main.js",
  "./manifest.json",
  "./img/icons/favicon_io/android-chrome-192x192.png",
  "./img/icons/favicon_io/android-chrome-512x512.png"
];

// Instalación: cachea los recursos iniciales y se activa enseguida.
self.addEventListener("install", event => {
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then(cache =>
        Promise.all(
          PRECACHE_URLS.map(url =>
            cache.add(url).catch(err => console.warn("SW: no se pudo cachear", url, err))
          )
        )
      )
      .then(() => self.skipWaiting())
  );
});

// Activación: borra caches viejos y toma control de las pestañas abiertas.
self.addEventListener("activate", event => {
  event.waitUntil(
    caches
      .keys()
      .then(nombres =>
        Promise.all(nombres.filter(n => n !== CACHE_NAME).map(n => caches.delete(n)))
      )
      .then(() => self.clients.claim())
  );
});

// Guarda una copia solo si la respuesta es válida y del mismo sitio.
function guardar(request, response) {
  if (response && response.ok && response.type === "basic" && !response.redirected) {
    const copia = response.clone();
    caches.open(CACHE_NAME).then(cache => cache.put(request, copia));
  }
  return response;
}

self.addEventListener("fetch", event => {
  const request = event.request;

  // Solo GET, solo del propio sitio (CDNs, fuentes y Google pasan directo a la red).
  if (request.method !== "GET") return;
  const url = new URL(request.url);
  if (url.origin !== self.location.origin) return;

  // Audio y video (cantos de pájaros, tour de la cabaña) no se cachean:
  // son pesados y usan respuestas parciales que no se pueden guardar.
  if (request.headers.has("range")) return;
  if (request.destination === "audio" || request.destination === "video") return;

  const esPagina = request.mode === "navigate";
  const esPromos = url.pathname.endsWith("/posts.json");

  // Páginas y promos: primero la red (para ver siempre lo último que subas),
  // y si no hay conexión, la copia guardada.
  if (esPagina || esPromos) {
    event.respondWith(
      fetch(request)
        .then(resp => guardar(request, resp))
        .catch(() =>
          caches
            .match(request)
            .then(r => r || (esPagina ? caches.match("./index.php") : null))
            .then(r => r || Response.error())
        )
    );
    return;
  }

  // Resto (CSS, JS, imágenes): responde rápido con la copia guardada
  // y actualiza en segundo plano para la próxima visita.
  event.respondWith(
    caches.match(request).then(cacheada => {
      const deRed = fetch(request)
        .then(resp => guardar(request, resp))
        .catch(() => cacheada || Response.error());
      return cacheada || deRed;
    })
  );
});