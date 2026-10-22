<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>CasaAlpina - Algo mas que apacibles sierras</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cuatro cabañas totalmente equipadas, independientes y de reciente construcción" name="description">

    <!-- Etiqueta canónica -->
    <link rel="canonical" href="https://elgela.github.io/casaalpina-coraluxe/index.html" />

    <!-- Favicon -->
    <link href="img/logos/favicon_io/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Yeseva+One&family=Dancing+Script&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Manifest .json -->
    <link rel="manifest" href="manifest.json">

    <!-- Service Worker -->
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("./service-worker.js")
                .then(reg => console.log("Service Worker registrado:", reg))
                .catch(err => console.error("Error al registrar SW:", err));
        }
    </script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php $current = basename($_SERVER['PHP_SELF']); ?>

    <!-- Header Start -->
    <div class="container-fluid p-0 mt-5">
        <nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/logos/logo_casaalpina-nobg.webp" alt="logo CasaAlpina"
                    style="width: 110px;margin-left: 20%;">
                <h1 class="mb-0 text-success">CasaAlpina</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link <?= $current == 'index.php' ? 'active' : '' ?>">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cabañas</a>
                        <div class="dropdown-menu m-0">
                            <a href="cabs.php" class="dropdown-item">Grid <i class="bi bi-grid"></i></a>
                            <a href="index.php#detalles" class="dropdown-item">Detalles</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown promos">
                        <a href="blog.php" class="nav-link <?=  $current == 'blog.php' ? 'active' : '' ?> ">Promos</a>
                        <!-- <div class="dropdown-menu m-0">
                            <a href="#blog" class="dropdown-item">Blog Post</a>
                        </div> -->
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Enlaces útiles</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://promos.casaalpina.com.ar/" target="_blank" class="dropdown-item">Promos <i
                                    class="bi bi-box-arrow-up-right"></i></a>
                            <a href="https://www.google.co.ve/travel/hotels/entity/ChkIydLc2uDKy4SoARoML2cvMTFyOTA5Zmd4EAE/reviews?utm_campaign=sharing&utm_medium=link&utm_source=htls&ts=CAEaIAoCGgASGhIUCgcI6g8QChgaEgcI6g8QChgbGAEyAhAAKgQKABoA"
                                target="_blank" rel="noopener noreferrer" class="dropdown-item">Testimonios <i
                                    class="bi bi-box-arrow-up-right"></i></a>
                            <a href="https://www.tandil.tur.ar/atractivos.php" target="_blank"
                                class="dropdown-item">Atractivos Tandil <i class="bi bi-box-arrow-up-right"></i></a>
                        </div>
                    </div>
                    <a href="ubicacion.php" class="nav-item nav-link <?= $current == 'ubicacion.php' ? 'active' : '' ?>">Ubicación</a>
                </div>
                <a class="btn btn-primary btn-reserva d-none d-lg-flex btn-success"
                    href="https://wa.me/2494549919?text=Hola, %20quiero%20hacer%20una%20reserva" target="_blank"
                    rel="noopener noreferrer">Reservar &nbsp<i class="bi bi-whatsapp"
                        style="font-size: 1.1rem;"></i></a>
            </div>
        </nav>

        <!-- <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source srcset="img/exterior/IMG_1423-movil.webp" media="(max-width: 768px)"
                            alt="Camino y árboles">
                        <img class="w-100" src="img/exterior/IMG_1423.webp" alt="Camino y árboles">
                    </picture>
                    <div class="carousel-caption">
                        <div class="row h-100 align-items-center justify-content-center">
                            <div class="col-10 col-md-8">
                                <h1 class="display-1 text-white animated slideInDown">Escapate a un paraíso puro</h1>
                                <p class="fs-3 mb-5 animated slideInDown">Tu refugio ideal en Tandil</p>
                                <a href="exterior.html" class="btn btn-success py-3 px-4 animated slideInDown">Conocé
                                    más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source srcset="img/pileta/IMG_1498-movil.webp" media="(max-width: 768px)"
                            alt="pileta y cabañas de fondo">
                        <img class="w-100" src="img/pileta/IMG_1498.webp" alt="pileta y cabañas de fondo">
                    </picture>
                    <div class="carousel-caption">
                        <div class="row h-100 align-items-center justify-content-center">
                            <div class="col-10 col-md-8">
                                <h1 class="display-1 text-white animated slideInDown">Pileta y solarium</h1>
                                <p class="fs-3 mb-5 animated slideInDown">En donde la calma te encuentra</p>
                                <a href="pileta.html" class="btn btn-success py-3 px-4 animated slideInDown">Conocé
                                    más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
    </div>
    <!-- Header End -->