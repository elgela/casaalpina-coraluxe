<?php
/**
 * mailto.php — Formulario de contacto de CasaAlpina
 *
 * Subir a la raíz del sitio (public_html), junto a index.php.
 * Espera un POST con los campos: nombre, email, movil, asunto, mensaje.
 * Opcional: un campo oculto "website" (anti-spam, debe llegar vacío).
 */

// ============ CONFIGURACIÓN (revisar antes de subir) ============
const DESTINO         = 'contacto@turesponsive.com.ar'; // dónde llegan las consultas
const REMITENTE       = 'contacto@turesponsive.com.ar';   // debe ser un correo de tu dominio en DonWeb
const NOMBRE_SITIO    = 'CasaAlpina';
const PAGINA_INICIO   = 'index.php';
const ESPERA_SEGUNDOS = 30; // tiempo mínimo entre dos envíos del mismo visitante
// ================================================================

// Los errores se guardan en el log del servidor, nunca se muestran al visitante.
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

date_default_timezone_set('America/Argentina/Buenos_Aires');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/** ¿El formulario espera una respuesta JSON (fetch/AJAX) en vez de una página? */
function quiere_json(): bool
{
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    $xhr    = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '';
    return stripos($accept, 'application/json') !== false
        || strtolower($xhr) === 'xmlhttprequest';
}

/** Responde y termina el script. */
function responder(int $codigo, bool $ok, string $mensaje): void
{
    http_response_code($codigo);

    if (quiere_json()) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $ok, 'mensaje' => $mensaje], JSON_UNESCAPED_UNICODE);
        exit;
    }

    header('Content-Type: text/html; charset=utf-8');
    $icono  = $ok ? '✅' : '❌';
    $texto  = htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8');
    $inicio = htmlspecialchars(PAGINA_INICIO, ENT_QUOTES, 'UTF-8');
    $sitio  = htmlspecialchars(NOMBRE_SITIO, ENT_QUOTES, 'UTF-8');

    echo '<!DOCTYPE html><html lang="es"><head><meta charset="utf-8">'
        . '<meta name="viewport" content="width=device-width, initial-scale=1">'
        . '<title>' . $sitio . '</title></head>'
        . '<body style="font-family:sans-serif;text-align:center;padding:3rem 1rem;">'
        . '<p style="font-size:1.2rem;">' . $icono . ' ' . $texto . '</p>'
        . '<p><a href="' . $inicio . '">Volver al inicio</a></p>'
        . '</body></html>';
    exit;
}

/** Lee un campo del POST como texto (ignora arrays u otros tipos). */
function campo(string $nombre): string
{
    $valor = $_POST[$nombre] ?? '';
    return is_string($valor) ? $valor : '';
}

/** Recorta respetando UTF-8 (usa mbstring si está disponible). */
function recortar(string $valor, int $max): string
{
    return function_exists('mb_substr') ? mb_substr($valor, 0, $max, 'UTF-8') : substr($valor, 0, $max);
}

/** Campo de una sola línea: quita saltos de línea y caracteres de control (evita inyección de cabeceras). */
function linea(string $valor, int $max): string
{
    $valor = preg_replace('/[\x00-\x1F\x7F]+/u', ' ', $valor) ?? '';
    return recortar(trim($valor), $max);
}

/** Texto largo: permite saltos de línea pero quita caracteres de control. */
function texto_largo(string $valor, int $max): string
{
    $valor = str_replace(["\r\n", "\r"], "\n", $valor);
    $valor = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $valor) ?? '';
    return recortar(trim($valor), $max);
}

// --- Solo se acepta POST ---
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    responder(405, false, 'Método no permitido.');
}

// --- Anti-spam: los bots suelen rellenar el campo oculto "website" ---
if (campo('website') !== '') {
    responder(200, true, 'El mensaje ha sido enviado.'); // se simula éxito, no se envía nada
}

// --- Límite de frecuencia por visitante ---
$ahora = time();
if (isset($_SESSION['ultimo_envio']) && ($ahora - (int) $_SESSION['ultimo_envio']) < ESPERA_SEGUNDOS) {
    responder(429, false, 'Esperá unos segundos antes de enviar otro mensaje.');
}

// --- Lectura y limpieza de datos ---
$nombre  = linea(campo('nombre'), 100);
$email   = linea(campo('email'), 150);
$movil   = linea(campo('movil'), 40);
$asunto  = linea(campo('asunto'), 120);
$mensaje = texto_largo(campo('mensaje'), 3000);

// --- Validación ---
if ($nombre === '' || $mensaje === '') {
    responder(400, false, 'Completá tu nombre y tu mensaje.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    responder(400, false, 'El email no es válido.');
}

// --- Armado del correo ---
$asuntoFinal = 'Formulario de contacto' . ($asunto !== '' ? ': ' . $asunto : '');
$asuntoCodificado = function_exists('mb_encode_mimeheader')
    ? mb_encode_mimeheader($asuntoFinal, 'UTF-8', 'B', "\r\n")
    : '=?UTF-8?B?' . base64_encode($asuntoFinal) . '?=';

$cuerpo  = "Nueva consulta desde el sitio web\n\n";
$cuerpo .= "Nombre: $nombre\n";
$cuerpo .= "Email: $email\n";
$cuerpo .= 'Móvil: ' . ($movil !== '' ? $movil : '(no indicado)') . "\n";
$cuerpo .= 'Asunto: ' . ($asunto !== '' ? $asunto : '(sin asunto)') . "\n\n";
$cuerpo .= "Mensaje:\n$mensaje\n\n";
$cuerpo .= '---' . "\n" . 'Enviado el ' . date('d/m/Y H:i') . "\n";

// El remitente es siempre tu dominio; la respuesta va al email del visitante.
$cabeceras = implode("\r\n", [
    'From: ' . NOMBRE_SITIO . ' <' . REMITENTE . '>',
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
    'X-Mailer: PHP/' . phpversion(),
]);

// --- Envío ---
if (mail(DESTINO, $asuntoCodificado, $cuerpo, $cabeceras)) {
    $_SESSION['ultimo_envio'] = $ahora;
    responder(200, true, '¡Gracias! Tu mensaje fue enviado.');
}

error_log('mailto.php: mail() devolvió false');
responder(500, false, 'No pudimos enviar el mensaje. Probá de nuevo en unos minutos o escribinos a ' . REMITENTE . '.');
