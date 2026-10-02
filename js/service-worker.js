// service-worker.js

const CACHE_NAME = "casaalpina-cache-v1";
const urlsToCache = [
    "./",
    "./index.html",
    "./styles.css",
    "./script.js",
    "./images/icons/icon-192.png",
    "./images/icons/icon-512.png"
];

// Instalación: cachea los recursos iniciales
self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(urlsToCache);
        })
    );
});

// Activación: limpia caches viejos
self.addEventListener("activate", event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});

// Fetch: responde con cache o red
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request);
        })
    );
});
