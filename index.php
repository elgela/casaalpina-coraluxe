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
    <link href="img/logos/android-icon-144x144.png" rel="icon">

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
    <div class="container-fluid p-0">
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
                            <a href="#detalles" class="dropdown-item">Detalles</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#blog" class="nav-link">Blog</a>
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
                    <a href="contacto.php" class="nav-item nav-link <?= $current == 'contacto.php' ? 'active' : '' ?>">Contacto</a>
                </div>
                <a class="btn btn-primary btn-reserva d-none d-lg-flex btn-success"
                    href="https://wa.me/2494549919?text=Hola, %20quiero%20hacer%20una%20reserva" target="_blank"
                    rel="noopener noreferrer">Reservar &nbsp<i class="bi bi-whatsapp"
                        style="font-size: 1.1rem;"></i></a>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
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
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div id="about" class="container-fluid py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <p class="fs-4 font-dancing-script text-success mb-0">Bienvenidos</p>
                    <h1 class="display-4 mb-0">Cabañas CasaAlpina</h1>
                    <h3>Tandil, Bs. As.</h3>
                    <h6 class="mb-4">Cuatro cabañas totalmente equipadas, independientes y de reciente construcción...
                        cada una de ellas con su propio entorno de vegetación. En su interior, numerosos detalles de
                        confort y comodidad.</p>
                        <p class="mb-4">Nuestro predio, ubicado en las laderas del Cerro El Centinela, posee media
                            hectárea de parques y jardines... Con frondosa y añeja arboleda, con más de 20 años.
                            Hermosos pinos, acacias, aromos y araucarias. Todo su perímetro cercado con diversos
                            ligustros, cotoneaster y grateau, que le dan gran colorido y privacidad.</p>

                        <p>Numerosa cantidad de rosales y arbustos florales. La vegetación de jardinería, acompaña
                            armoniosamente la individualidad de cada cabaña. Verde y corto césped en toda la extensión,
                            con caminos interiores de pedregullo granítico, perfectamente delimitados.</p>

                        <p>El predio se encuentra iluminado, desde el portón de ingreso, hasta los caminos y jardines.
                        </p>
                        <img class="img-fluid mb-2" src="img/firma_angeles.png" title="Firma Hotel Manager"
                            alt="firma de manager hotel">
                        <p class="mb-0 ps-4">Hotel Manager</p>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid rounded position-absolute w-100 h-100" src="img/logos/logo_casaalpina-nobg.webp"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact-counter py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn-lg-square bg-primary rounded mx-auto mb-3">
                        <i class="fa-solid fa-house text-white"></i>
                    </div>
                    <h1 class="display-5 text-white counter" data-target="4">0</h1>
                    <h5 class="text-white mb-0">Cabañas</h5>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn-lg-square bg-primary rounded mx-auto mb-3">
                        <i class="fa-solid fa-user-group text-white"></i>
                    </div>
                    <h1 class="display-5 text-white counter" data-target="6">0</h1>
                    <h5 class="text-white mb-0">Equipo</h5>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn-lg-square bg-primary rounded mx-auto mb-3">
                        <i class="fa-solid fa-comment text-white"></i>
                    </div>
                    <h1 class="display-5 text-white counter" data-target="228">0</h1>
                    <h5 class="text-white mb-0">Opiniones</h5>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <div class="btn-lg-square bg-primary rounded mx-auto mb-3">
                        <i class="fa-solid fa-person-walking-luggage text-white"></i>
                    </div>
                    <h1 class="display-5 text-white counter" data-target="27648">0</h1>
                    <h5 class="text-white mb-0">Huespedes</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!-- Caracteristicas Start -->
    <div id="detalles" class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-8 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="fs-4 font-dancing-script text-success mb-0">Características</p>
                        <h1 class="display-4 mb-4">Relajate. Refrescate. Renovate.</h1>
                        <p class="mb-4 pb-2"><i class="bi bi-caret-right-fill"></i>Relajate en un entorno pensado para
                            tu descanso absoluto.</p>
                        <p class="mb-4 pb-2"><i class="bi bi-caret-right-fill"></i>Refrescate con experiencias que
                            revitalizan cuerpo y mente.</p>
                        <p class="mb-4 pb-2"><i class="bi bi-caret-right-fill"></i>Renovate cada día con la energía que
                            solo aquí encontrarás.</p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img src="img/logos/icons8-coche.gif" alt="">
                                    <div class="ms-3">
                                        <h5 class="mb-1">Con Cochera</h5>
                                        <span>La cabaña cuenta con cochera privada para estacionar su vehículo
                                            cómodamente.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img src="img/logos/icons8-té.gif" alt="">
                                    <div class="ms-3">
                                        <h5 class="mb-1">Desayuno Incluído</h5>
                                        <span>La estadía incluye desayuno completo cada mañana, para comenzar bien el
                                            día.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img src="img/logos/icons8-wifi.gif" alt="">
                                    <div class="ms-3">
                                        <h5 class="mb-1">Wifi</h5>
                                        <span>La cabaña ofrece conexión Wi‑Fi gratuita para disfrutar internet sin
                                            límites.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <img src="img/logos/icons8-tumbona.gif" alt="">
                                    <div class="ms-3">
                                        <h5 class="mb-1">Pileta</h5>
                                        <span>El complejo cuenta con pileta disponible para disfrutar y relajarse
                                            plenamente.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/pileta/IMG_1498.webp"
                            style="object-fit: cover;" alt="vista piletra y cabaña del solar">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Service Start -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-4 font-dancing-script text-success mb-0">Comodidades</p>
                <h1 class="display-4 mb-5">Lo que vas a disfrutar</h1>
            </div>
            <h4>En CasaAlpina vas a encontrar descanso auténtico: pileta, espacios verdes y el desayuno de cada mañana,
                todo en un entorno seguro y tranquilo.</h4>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item rounded text-center h-100 px-4 py-5">
                        <i class="fas fa-hamburger fa-3x text-primary mb-3"></i>
                        <h5>Parrilla privada</h5>
                        <hr class="w-25 mx-auto text-primary" style="height: 2px;">
                        <span>Viví el clásico asado en tu propia cabaña.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.2s">
                    <div class="service-item rounded text-center h-100 px-4 py-5">
                        <i class="fa-solid fa-person-swimming fa-3x text-primary mb-3"></i>
                        <h5>Pileta </h5>
                        <hr class="w-25 mx-auto text-primary" style="height: 2px;">
                        <span>Relajate y refrescate bajo el sol de Tandil.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item rounded text-center h-100 px-4 py-5">
                        <i class="fa-solid fa-tree fa-3x text-primary mb-3"></i>
                        <h5>Espacios verdes</h5>
                        <hr class="w-25 mx-auto text-primary" style="height: 2px;">
                        <span>Disfrutá la tranquilidad entre árboles y jardines.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="service-item rounded text-center h-100 px-4 py-5">
                        <i class="fa-solid fa-key fa-3x text-primary mb-3"></i>
                        <h5>Acceso seguro</h5>
                        <hr class="w-25 mx-auto text-primary" style="height: 2px;">
                        <span>Portón eléctrico para tu tranquilidad y comodidad.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->


    <!-- Contact Start -->
    <!-- <div id="contacto" class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-8 contact-text py-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="fs-4 font-dancing-script text-success mb-0">Contacto</p>
                        <h1 class="display-4 mb-4">Pónte en contacto</h1>
                        <form action="mailto.php" method="post">
                            <div class="row g-3">
                                <div class="col-sm-6 control-group">
                                    <div class="form-floating">
                                        <input type="text" name="nombre" class="form-control" id="name"
                                            placeholder="Nombre" />
                                        <label for="name">Nombre y Apellido</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email" />
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <div class="form-floating">
                                        <input type="text" name="movil" class="form-control" id="mobile"
                                            placeholder="Movil" />
                                        <label for="mobile">Número de teléfono</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <div class="form-floating">
                                        <input type="text" name="asunto" class="form-control" id="subject"
                                            placeholder="Asunto" />
                                        <label for="subject">Asunto</label>
                                    </div>
                                </div>
                                <div class="col-12 control-group">
                                    <div class="form-floating">
                                        <textarea style="height: 165px" class="form-control" name="mensaje" id="message"
                                            placeholder="Mensaje"></textarea>
                                        <label for="mensaje">Dejá tu mensaje aquí</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473.8045339665555!2d-59.16933052504287!3d-37.34828340757733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95911f11299640c9%3A0xa8092e560b572949!2sCasaAlpina!5e1!3m2!1ses-419!2sar!4v1789875338373!5m2!1ses-419!2sar"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Contact End -->

    <!-- Blog Start -->
    <div class="blog" id="blog">
        <div class="container-posts">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p class="fs-4 font-dancing-script text-success mb-0">Del Blog</p>
                <h1 class="display-4 mb-5">Detalles que hacen la diferencia</h1>
            </div>

            <div id="posts" class="row"></div>
            <button id="verMas">Ver más</button>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Blog Start -->
    <!-- <div id="blog" class="container-fluid py-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fs-4 font-dancing-script text-success mb-0">Blog Post</p>
                <h1 class="display-4 mb-5">Detalles que hacen la diferencia</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item rounded h-100 p-4">
                        <div class="blog-img position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blogs/blog-cafetera.png"
                                alt="cafetera nueva">
                            <div class="blog-meta d-flex rounded-bottom overflow-hidden">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center btn-success px-4">
                                    <h5 class="text-white mb-n1">15</h5>
                                    <p class="text-white mb-0">Sept</p>
                                </div>
                                <div class="bg-light w-100 h-50 d-flex align-items-center align-self-end">
                                    <small class="ms-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                    <small class="ms-3"><i class="fa fa-folder text-primary me-2"></i>Travel</small>
                                </div>
                            </div>
                        </div>
                        <p class="h5 d-inline-block">Café y sierras, la combinación perfecta</a>
                        <p>Disfrutar de un buen café rodeado de paisajes serranos es una experiencia ideal para
                            relajarse y conectar con la naturaleza.</p>
                        <a href="" class="btn btn-success px-4">Leer más</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item rounded h-100 p-4">
                        <div class="blog-img position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blogs/blog-2.jpg" alt="">
                            <div class="blog-meta d-flex rounded-bottom overflow-hidden">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center btn-success px-4">
                                    <h5 class="text-white mb-n1">01</h5>
                                    <p class="text-white mb-0">Jan</p>
                                </div>
                                <div class="bg-light w-100 h-50 d-flex align-items-center align-self-end">
                                    <small class="ms-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                    <small class="ms-3"><i class="fa fa-folder text-primary me-2"></i>Travel</small>
                                </div>
                            </div>
                        </div>
                        <p class="h5 d-inline-block">Top seven hotel trends to watch in 2045</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris nulla, vestibulum sed
                            mollis non, efficitur in mauris.</p>
                        <a href="" class="btn btn-success px-4">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item rounded h-100 p-4">
                        <div class="blog-img position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blogs/blog-3.jpg" alt="">
                            <div class="blog-meta d-flex rounded-bottom overflow-hidden">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center btn-success px-4">
                                    <h5 class="text-white mb-n1">01</h5>
                                    <p class="text-white mb-0">Jan</p>
                                </div>
                                <div class="bg-light w-100 h-50 d-flex align-items-center align-self-end">
                                    <small class="ms-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                    <small class="ms-3"><i class="fa fa-folder text-primary me-2"></i>Travel</small>
                                </div>
                            </div>
                        </div>
                        <p class="h5 d-inline-block">Five best things to do in Baa Atoll, Maldives</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris nulla, vestibulum sed
                            mollis non, efficitur in mauris.</p>
                        <a href="" class="btn btn-success px-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->

    <!-- Modal al cargar pagina -->
    <div class="modal fade" id="welcomeModal" data-bs-backdrop="true" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title">Bienvenido</h5>
                </div> -->
                <div class="modal-body">
                    <!-- <p>Gracias por visitar nuestra página.</p> -->
                    <img src="img/promos/verano3cuotas.jpg" class="w-100" alt="promo 3 cuotas">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2 text-white" title="Cerrar"
                        data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-5 text-center">
                    <h4 class="text-white mb-4">Contacto</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a
                            href="https://maps.app.goo.gl/FvRoMXFaYyt1hfyH9" class="text-decoration-none"
                            target="_blank" rel="noopener noreferrer">Icalma 2904, Tandil, Bs.
                            As.</a></p>
                    <!-- <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>2494 549 919</p> -->
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a class="text-decoration-none"
                            href="mailto:contacto@casaalpina.com.ar">contacto@casaalpina.com.ar</a></p>
                    <div class="d-flex pt-2 justify-content-center">
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/casaalpina"
                            target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/casaalpina.tandil/"
                            target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="http://www.youtube.com/@Caba%C3%B1asCASAALPINA"
                            target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.tiktok.com/@casaalpina"
                            target="_blank" rel="noopener noreferrer"><i class="bi bi-tiktok"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://wa.me/2494549919" target="_blank"
                            rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4 d-flex justify-content-center">Imágenes</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <a href="img/galeria/IMG_0157.webp"><img class="img-fluid rounded border p-1 w-100"
                                    src="img/galeria/IMG_0157.webp" alt=""></a>
                        </div>
                        <div class="col-4">
                            <a href="img/galeria/IMG_0162.webp"><img class="img-fluid rounded border p-1 w-100"
                                    src="img/galeria/IMG_0162.webp" alt=""></a>
                        </div>
                        <div class="col-4">
                            <a href="img/galeria/IMG_1283.webp"><img class="img-fluid rounded border p-1 w-100"
                                    src="img/galeria/IMG_1283.webp" alt=""></a>
                        </div>
                        <div class="col-4">
                            <a href="img/galeria/IMG_1377.webp"><img class="img-fluid rounded border p-1 w-100"
                                    src="img/galeria/IMG_1377.webp" alt=""></a>
                        </div>
                        <div class="col-4">
                            <a href="img/galeria/IMG_1413.webp"><img class="img-fluid rounded border p-1 w-100"
                                    src="img/galeria/IMG_1413.webp" alt=""></a>
                        </div>
                        <div class="col-4">
                            <a href="img/galeria/rotonda_lucesNavidad.webp"><img
                                    class="img-fluid rounded border p-1 w-100"
                                    src="img/galeria/rotonda_lucesNavidad.webp" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 w-100">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Suscribite y recibí las últimas noticias</p>
                    <div class="position-relative">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Suscribirse</button>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="https://www.turesponsive.com.ar/" target="_blank">turesponsive</a>, All Right
                        Reserved.
                        <div> Iconos diseñados por <a href="https://www.flaticon.es/autores/magnific" title="Magnific">
                                Magnific </a> from <a href="https://www.flaticon.es/"
                                title="Flaticon">www.flaticon.es'</a></div>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a href="https://htmlcodex.com" target="_blank" rel="noopener noreferrer">HTML
                            Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-success btn-lg-square back-to-top" title="Ir arriba"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>