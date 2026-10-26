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
    <link href="img/icons/favicon_io/favicon.ico" rel="icon">

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

    <!-- Splash Start -->
    <div id="splash">
        <svg viewBox="0 0 234 219" class="logo" width="180" height="180">
            <!-- Aquí va el trazado del logo CasaAlpina en formato SVG -->
            <path
                stroke="#fefefe" fill="none" stroke-width="3"
                d="M 0,109.5 C 0,0 0,0 117,0 234,0 234,0 234,109.5 234,219 234,219 117,219 0,219 0,219 0,109.5 Z m 93.023017,85.65801 c 3.587659,-1.15398 11.912663,-5.32387 18.500003,-9.26641 31.63748,-18.93511 53.83685,-27.24839 76.22698,-28.54571 6.1875,-0.35851 11.25,-0.82083 11.25,-1.02738 0,-5.08603 -6.41256,-12.22614 -11.55767,-12.86898 C 170.59784,141.34495 137.13249,146.63728 113,155.2221 82.132046,166.20298 83.005626,165.96273 73.875727,165.9819 36.856333,166.0596 30.460037,119.10354 65.25,102.65928 68.4125,101.16445 71,99.560389 71,99.094697 71,98.629005 73.930363,92.93456 77.511917,86.440374 85.690299,71.61108 84.505255,70.452169 65.94039,75.12403 6.5781445,90.062579 -7.1857957,169.32313 45.5,192.83136 c 12.455045,5.55741 34.17318,6.62069 47.523017,2.32665 z M 220.70257,195.75 C 208.05751,164.84272 196.25095,159.97484 161.07597,171.16574 145.6498,176.07357 112,193.42907 112,196.47757 112,196.76491 136.57314,197 166.60699,197 c 43.29168,0 54.50102,-0.25902 54.09558,-1.25 z M 93,152.84938 c 17.74162,-6.28054 17.23519,-5.7661 29.01238,-29.4715 9.4253,-18.97144 10.39929,-20.53674 11.68983,-18.78684 0.77431,1.04993 4.99698,8.99646 9.3837,17.65896 4.38673,8.6625 8.07447,15.74626 8.19498,15.74169 0.12051,-0.005 5.16911,-0.67078 11.21911,-1.48047 6.05,-0.8097 14.4875,-1.48096 18.75,-1.4917 4.2625,-0.0107 7.75,-0.1914 7.75,-0.40149 0,-0.21008 -6.6142,-12.47258 -14.69823,-27.25 -8.08402,-14.777415 -16.07152,-29.451894 -17.75,-32.60995 C 153.92052,69.807363 151,67.208355 151,69.81748 c 0,1.84891 -15.74719,16.537592 -22.75222,21.22284 -13.42276,8.97769 -25.71588,14.17872 -44.67273,18.90032 -11.519789,2.86925 -14.357995,6.46951 -27.549811,34.94689 C 50.601075,156.59675 70.381891,160.8562 93,152.84938 Z M 88.355655,100.41862 C 107.5385,95.481516 125.66985,82.718306 139.14933,64.663406 146.34574,55.024281 146.92254,58.398378 134.25,36.004205 121.8276,14.052077 123.29319,15.298696 119.25548,23.25 117.50991,26.6875 112.88076,35.575 108.9685,43 c -6.25229,11.866085 -28.910698,56.129892 -29.801833,58.21868 -0.510088,1.19562 2.429243,0.93971 9.188988,-0.80006 z"
                id="path5" />
            <path
                stroke="#f7932a" fill="none" stroke-width="3"
                d="M 79.166667,101.21868 C 80.057802,99.129892 102.71621,54.866085 108.9685,43 c 3.91226,-7.425 8.54141,-16.3125 10.28698,-19.75 4.03771,-7.951304 2.57212,-9.197923 14.99452,12.754205 12.8494,22.706703 12.6995,23.574505 -7.35067,42.553129 -13.38166,12.666504 -51.110293,30.578386 -47.732663,22.661346 z"
                id="path4" />
            <path
                stroke="#649854" fill="none" stroke-width="3"
                d="m 63.75,197.33772 c 0.6875,-0.27741 1.8125,-0.27741 2.5,0 0.6875,0.27741 0.125,0.50439 -1.25,0.50439 -1.375,0 -1.9375,-0.22698 -1.25,-0.50439 z m 17.0625,-0.0208 c 0.721875,-0.28887 1.584375,-0.25335 1.916667,0.0789 0.332291,0.33229 -0.258334,0.56864 -1.3125,0.52522 -1.164943,-0.048 -1.4019,-0.28494 -0.604167,-0.60416 z M 112,196.47757 c 0,-1.29293 18.13262,-12.15089 28.28686,-16.9384 26.09594,-12.3037 59.75384,-18.70457 64.03085,-12.17704 0.95062,1.45083 1.38052,2.64476 0.95534,2.65318 -0.42518,0.008 -0.29395,0.34592 0.29163,0.75 C 206.63054,171.50082 221,195.41109 221,196.44914 221,196.75211 196.475,197 166.5,197 136.525,197 112,196.76491 112,196.47757 Z M 27.437091,180.75 C 24.5,177.5 24.5,177.5 27.75,180.43709 c 1.7875,1.6154 3.25,3.0779 3.25,3.25 0,0.77256 -0.825128,0.0924 -3.562909,-2.93709 z M 69.75,166.29427 c 1.2375,-0.23836 3.2625,-0.23836 4.5,0 1.2375,0.23835 0.225,0.43337 -2.25,0.43337 -2.475,0 -3.4875,-0.19502 -2.25,-0.43337 z m 111.0625,-8.97738 c 0.72187,-0.28887 1.58437,-0.25335 1.91667,0.0789 0.33229,0.33229 -0.25834,0.56864 -1.3125,0.52522 -1.16495,-0.048 -1.4019,-0.28494 -0.60417,-0.60416 z m -103,-1 c 0.721875,-0.28887 1.584375,-0.25335 1.916667,0.0789 0.332291,0.33229 -0.258334,0.56864 -1.3125,0.52522 -1.164943,-0.048 -1.4019,-0.28494 -0.604167,-0.60416 z m 94.94916,-13.02415 c 1.24391,-0.23919 3.04391,-0.23011 4,0.0202 0.95609,0.25029 -0.0617,0.446 -2.26166,0.4349 -2.2,-0.0111 -2.98225,-0.21589 -1.73834,-0.45508 z m 11.98834,0.045 c 0.6875,-0.27741 1.8125,-0.27741 2.5,0 0.6875,0.27741 0.125,0.50439 -1.25,0.50439 -1.375,0 -1.9375,-0.22698 -1.25,-0.50439 z m -24.9375,-7.02083 c 0.72187,-0.28887 1.58437,-0.25335 1.91667,0.0789 0.33229,0.33229 -0.25834,0.56864 -1.3125,0.52522 -1.16495,-0.048 -1.4019,-0.28494 -0.60417,-0.60416 z m 7.9375,-0.97917 c 0.6875,-0.27741 1.8125,-0.27741 2.5,0 0.6875,0.27741 0.125,0.50439 -1.25,0.50439 -1.375,0 -1.9375,-0.22698 -1.25,-0.50439 z M 32.5,94 c 2.148243,-2.2 4.130896,-4 4.405896,-4 0.275,0 -1.257653,1.8 -3.405896,4 -2.148243,2.2 -4.130896,4 -4.405896,4 -0.275,0 1.257653,-1.8 3.405896,-4 z m 113,-18 c 0.99549,-1.1 2.03498,-2 2.30998,-2 0.275,0 -0.31449,0.9 -1.30998,2 -0.99549,1.1 -2.03498,2 -2.30998,2 -0.275,0 0.31449,-0.9 1.30998,-2 z M 73.75,73.337719 c 0.6875,-0.277412 1.8125,-0.277412 2.5,0 0.6875,0.277413 0.125,0.504386 -1.25,0.504386 -1.375,0 -1.9375,-0.226973 -1.25,-0.504386 z"
                id="path3" />
            <path
                stroke="#0d372a" fill="none" stroke-width="3"
                d="m 65,197.4195 c -1.375,-0.24355 -5.2,-0.92225 -8.5,-1.50822 C 12.13622,188.03364 -1.933241,131.73315 31.563653,96.125743 45.498844,81.312549 69.616303,70.500989 81.300676,73.829249 c 4.032263,1.148579 -9.655655,25.303464 -16.225288,28.632551 -26.750332,13.55542 -30.861895,48.77859 -7.093432,60.76842 11.857389,5.98138 22.83276,4.56793 51.878444,-6.68112 22.62362,-8.76186 57.40632,-14.51458 77.37531,-12.79712 14.06017,1.20927 13.54836,12.63499 -0.60151,13.42843 -21.06542,1.18121 -47.94577,11.23402 -73.36957,27.43903 C 96.967417,195.00721 78.713021,199.84838 65,197.4195 Z m -0.641805,-41.31129 c -4.119616,-1.06387 -10.365355,-4.9569 -10.331588,-6.43977 0.06768,-2.97195 18.91815,-37.1853 20.644606,-37.46967 28.181977,-4.64195 57.683567,-19.919421 72.932157,-37.768091 2.59157,-3.033456 5.06085,-5.158818 5.48731,-4.723027 0.42646,0.435792 8.68553,15.192348 18.3535,32.792348 17.57811,32 17.57811,32 3.81697,32.6555 -7.56863,0.36052 -15.9731,1.16661 -18.6766,1.79131 -3.90137,0.90149 -5.08691,0.86941 -5.74654,-0.1555 -0.4571,-0.71022 -4.54514,-8.59865 -9.08455,-17.52985 -9.90237,-19.482742 -8.09037,-19.78915 -19.54738,3.30544 -10.59973,21.36649 -10.83328,21.69872 -17.70608,25.18704 -13.162832,6.68084 -31.690469,10.5368 -40.141805,8.35427 z"
                id="path2" />
        </svg>
    </div>
    <!-- Splash End -->

    <?php $current = basename($_SERVER['PHP_SELF']); ?>

    <!-- Header Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/logos/logoCasaAlpina_sin_texto.png" alt="logo CasaAlpina"
                    style="width: 90px;margin-left: 25%;">
                <h1 class="mb-0 text-success">CasaAlpina</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link <?= $current == 'index.php' ? 'active' : '' ?>">Inicio</a>
                    <!-- <div class="nav-item dropdown"> -->
                        <a href="cabs.php" class="nav-item nav-link <?= $current == 'cabs.php' ? 'active' : '' ?>">Cabañas</a>
                        <!-- <div class="dropdown-menu m-0">
                            <a href="cabs.php" class="dropdown-item">Grid <i class="bi bi-grid"></i></a>
                            <a href="#detalles" class="dropdown-item">Detalles</a>
                        </div> -->
                    <!-- </div> -->
                    <div class="nav-item dropdown promos">
                        <a href="blog.php" class="nav-link">Promos</a>
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
                        <img class="img-fluid rounded position-absolute w-100 h-75 mt-5" src="img/logos/logoCasaAlpina_sin_texto.png"
                            style="object-fit: contain;" alt="logo de CasaAlpina">
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


    <!-- Caract Start -->
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
    <!-- Caract End -->


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


    <!-- Modal al cargar pagina -->
    <div class="modal fade" id="welcomeModal" data-bs-backdrop="true" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title">Bienvenido</h5>
                </div> -->
                <div class="modal-body">
                    <!-- <p>Gracias por visitar nuestra página.</p> -->
                    <img src="img/promos/clientesVIP.webp" class="w-100" alt="clientes VIP promocion">
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

    <!-- <script>
        window.addEventListener("load", () => {
            setTimeout(() => {
                document.getElementById("splash").style.display = "none";
            }, 5000); // se oculta a los 5 segundos
        });
    </script> -->

    <script>
        window.addEventListener("load", () => {
            const splash = document.getElementById("splash");

            // Detectar si está en modo standalone (PWA instalada)
            const isStandalone = window.matchMedia('(display-mode: standalone)').matches ||
                window.navigator.standalone === true;

            if (isStandalone) {
                // Mostrar splash con animación
                splash.style.display = "flex";
                setTimeout(() => {
                    splash.style.opacity = "0";
                    splash.style.transition = "opacity 1s";
                    setTimeout(() => {
                        splash.style.display = "none";
                    }, 1000);
                }, 5000); // se oculta a los 5 segundos
            } else {
                // Si está en navegador (ej: XAMPP), ocultar splash directamente
                splash.style.display = "none";
            }
        });
    </script>

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