<?php include 'includes/header.php'; ?>

<!-- Cabañas Start -->
<div id="cabanias_grid" class="container-fluid py-6">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fs-4 font-dancing-script text-success mb-0">Nuestras Cabañas</p>
            <h1 class="display-4 mb-5">Cabañas rodeadas de naturaleza</h1>
        </div>
        <div class="row g-4">
            <!-- Del Pinar -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="room-item bg-white rounded d-flex h-100 p-4">
                    <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                        style="width: 80px">
                        <div class="btn-success text-white py-3">
                            <small>Hasta</small>
                            <h5 class="text-white mb-0">4</h5>
                            <small>personas</small>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/radar.png" alt="logo de radar">
                            <p class="small mb-0">DirecTV</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/tv-ancha.png" alt="tv led">
                            <p class="small mb-0">TV Led 50"</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/horno-microondas.png" alt="logo microondas">
                            <p class="small mb-0">Microondas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/ducha.png" alt="logo de una ducha">
                            <p class="small mb-0">Ducha presurizada</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                            <!-- <i class="fa fa-circle text-primary" aria-hidden="true"></i> -->
                            <p class="small mb-0">Sommier a resortes 2 1/2 plazas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/sofa-cama.png" alt="sofa cama">
                            <p class="small mb-0">Sofa cama 1 plaza con cama debajo</p>
                        </div>

                        <div class="text-center mx-auto">
                            <img src="img/logos/chimenea.png" alt="hogar a leña">
                            <p class="small mb-0">Hogar a leña</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                            <p class="small mb-0">AA</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/wifi.png" alt="logo wifi">
                            <p class="small mb-0">Wifi</p>
                        </div>
                    </div>
                    <div class="room-detail">
                        <div id="imgModal" class="position-relative rounded overflow-hidden mb-3">
                            <div class="position-absolute top-0 start-0 text-white small py-1 px-3">Ver Imágenes
                            </div>
                            <!-- Imagen que abre el modal -->
                            <picture>
                                <!-- Imagen para moviles -->
                                <source srcset="img/cabs/cab1/cab1_frente-lejos.webp" media="(max-width: 768px)"
                                    class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                <!-- Imagen para tablets -->
                                <source srcset="img/cabs/cab1/cab1_frente-lejos.webp" media="(max-width: 1200px)"
                                    class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#carouselModal">
                                <!-- Imagen para PC -->
                                <img src="img/cabs/cab1/cab1_frente-lejos.webp" alt="Imagen principal de frente"
                                    class="img-princ img-fluid w-100" data-bs-toggle="modal"
                                    data-bs-target="#carouselModal">
                            </picture>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="carouselModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Botón de cierre -->
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal" aria-label="Cerrar">X</button>
                                    <div class="modal-body p-0">
                                        <!-- Carrusel dentro del modal -->
                                        <div id="carouselCab1" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab1/cab1_frente-lejos-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_frente-lejos.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_frente-lejos.webp"
                                                            alt="Imagen principal de frente"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab1/cab1_entrada-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_entrada.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_entrada.webp"
                                                            alt="Imagen de entrada" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab1/cab1_deck-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_deck.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_deck.webp"
                                                            alt="Imagen de entrada" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <source srcset="img/cabs/cab1/cab1_parrilla-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_parrilla.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_parrilla.webp"
                                                            alt="Imagen de parrilla" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <source srcset="img/cabs/cab1/cab1_camas-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_camas.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_camas.webp"
                                                            alt="Imagen de camas" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <source srcset="img/cabs/cab1/cab1_cocina-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_cocina.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_cocina.webp"
                                                            alt="Imagen de la cocina" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <source srcset="img/cabs/cab1/cab1_comedor-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_comedor.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_comedor.webp"
                                                            alt="Imagen del comedor" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <source srcset="img/cabs/cab1/cab1_banio-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab1/cab1_banio.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab1/cab1_banio.webp"
                                                            alt="Imagen del baño" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                            </div>
                                            <!-- Controles -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselCab1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselCab1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label class="h5 d-inline-block">Del Pinar</label>
                        <p>Muy confortable
                            construcción, con todas sus instalaciones en planta baja, con ladrillo vista exterior e
                            interior.
                            Tiene 58 mts2 de superficie habitable y todos sus pisos en un mismo nivel. Posee grandes
                            ventanales y puertas-balcón vidriadas, que le otorgan una gran luminosidad interior.
                            Cochera individual adjunta, con parrilla individual, deck de madera con mesa, sillas y
                            sombrilla con vista a los jardines del predio.</p>
                        <a href="#" class="btn btn-primary btn-success w-100 py-2"
                            onclick="abrirVideo('img/cabs/cab1/house_tour/tour_del_pinar.mp4'); return false;">
                            HOUSE TOUR
                        </a>
                    </div>
                </div>
            </div>

            <!-- Del Solar -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="room-item bg-white rounded d-flex h-100 p-4">
                    <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                        style="width: 80px">
                        <div class="btn-success text-white py-3">
                            <small>Hasta</small>
                            <h5 class="text-white mb-0">4</h5>
                            <small>personas</small>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/radar.png" alt="logo de radar">
                            <p class="small mb-0">DirecTV</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/tv-ancha.png" alt="tv led">
                            <p class="small mb-0">TV Led 50"</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/horno-microondas.png" alt="logo microondas">
                            <p class="small mb-0">Microondas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/ducha.png" alt="logo de una ducha">
                            <p class="small mb-0">Ducha presurizada</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                            <p class="small mb-0">Sommier a resortes 2 plazas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/sofa-cama.png" alt="sofa cama">
                            <p class="small mb-0">Sofa cama 1 plaza con cama debajo</p>
                        </div>

                        <div class="text-center mx-auto">
                            <img src="img/logos/chimenea.png" alt="hogar a leña">
                            <p class="small mb-0">Hogar a leña</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                            <p class="small mb-0">AA</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/wifi.png" alt="logo wifi">
                            <p class="small mb-0">Wifi</p>
                        </div>
                    </div>
                    <div class="room-detail">
                        <!-- Imagen que abre el modal -->
                        <div id="imgModal" class="position-relative rounded overflow-hidden mb-3">
                            <div class="position-absolute top-0 start-0 text-white small py-1 px-3">Ver Imágenes
                            </div>
                            <picture>
                                <!-- Imagen para moviles -->
                                <source srcset="img/cabs/cab2/cab2-frente.webp" media="(max-width: 768px)"
                                    class="img-thumbnail" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab2">
                                <!-- Imagen para tablets -->
                                <source srcset="img/cabs/cab2/cab2-frente.webp" media="(max-width: 1200px)"
                                    class="img-thumbnail" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab2">
                                <!-- Imagen para PC -->
                                <img src="img/cabs/cab2/cab2-frente.webp" alt="Imagen de frente"
                                    class="img-princ img-fluid w-100" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab2">
                            </picture>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="carouselModalCab2" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Botón de cierre -->
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal" aria-label="Cerrar">X</button>
                                    <div class="modal-body p-0">
                                        <!-- Carrusel dentro del modal -->
                                        <div id="carouselCab2" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-frente-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-frente.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-frente.webp"
                                                            alt="Imagen principal de frente"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2_escalera-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2_escalera.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2_escalera.webp"
                                                            alt="Imagen de living y escalera"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2_arriba-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2_arriba.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2_arriba.webp"
                                                            alt="Imagen de entrada" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-cochera-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-cochera.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-cochera.webp"
                                                            alt="Imagen de parrilla" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-cocina-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-cocina.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-cocina.webp"
                                                            alt="Imagen de camas" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-cocina_bacha-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-cocina_bacha.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-cocina_bacha.webp"
                                                            alt="Imagen de la cocina" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-deck-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-deck.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-deck.webp"
                                                            alt="Imagen del comedor" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-comedor-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-comedor.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-comedor.webp"
                                                            alt="Imagen del baño" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source
                                                            srcset="img/cabs/cab2/cab2-comedor_ventana-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-comedor_ventana.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-comedor_ventana.webp"
                                                            alt="Imagen del baño" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-deck2-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-deck2.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-deck2.webp"
                                                            alt="Imagen del baño" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab2/cab2-habitacion-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab2/cab2-habitacion.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab2/cab2-habitacion.webp"
                                                            alt="Imagen del baño" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                            </div>
                                            <!-- Controles -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselCab2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselCab2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="h5 d-inline-block">Del Solar</label>
                        <p>Hermosa construcción de dos plantas. En la
                            planta alta tiene un amplio dormitorio, donde se ubica una cama sommier de 2 plazas.

                            En la planta baja : Sala de estar, donde se ubican un sofacama de una plaza y otra cama
                            desplazable de una plaza. Comedor diario, cocina y baño completo.

                            Deck techado de madera, con mesa, sillas y vista panorámica a los jardines del predio.
                            Cochera techada individual y adjunta a la cabaña. Parrilla individual.</p>
                        <a href="#" class="btn btn-primary btn-success w-100 py-2"
                            onclick="abrirVideo('img/cabs/cab2/house_tour/tour_del_solar.mp4'); return false;">
                            HOUSE TOUR
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="room-item bg-white rounded d-flex h-100 p-4">
                        <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                            style="width: 80px">
                            <div class="btn-success text-white py-3">
                                <h5 class="text-white mb-0">$100</h5>
                                <small>Per Night</small>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/radar.png" alt="logo de radar">
                                <p class="small mb-0">DirecTV</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/tv-ancha.png" alt="tv led">
                                <p class="small mb-0">TV Led 50"</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/microondas.png" class="text-primary" width="20px"
                                    alt="logo microondas">
                                <p class="small mb-0">Microondas</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-shower text-primary" aria-hidden="true"></i>
                                <p class="small mb-0">Ducha presurizada</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                                <p class="small mb-0">Sommier a resortes 2 1/2 plazas</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/sofa-cama.png" alt="sofa cama">
                                <p class="small mb-0">Sofa cama 1 plaza con cama debajo</p>
                            </div>

                            <div class="text-center mx-auto">
                                <img src="img/logos/chimenea.png" alt="hogar a leña">
                                <p class="small mb-0">Hogar a leña</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                                <p class="small mb-0">AA</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-wifi text-primary"></i>
                                <p class="small mb-0">Wifi</p>
                            </div>
                        </div>
                        <div class="room-detail">
                            <div class="position-relative rounded overflow-hidden mb-3">
                                <img class="img-fluid w-100" src="img/cabs/cab2/cab2-frente.webp"
                                    alt="cabaña del solar">
                            </div>
                            <label class="h5 d-inline-block">Del solar</label>
                            <p>Hermosa construcción de dos plantas, con capacidad para alojar hasta 5 personas. En la
                                planta alta tiene un amplio dormitorio, donde se ubican una cama sommiers de 2 plazas y
                                media y una cama de una plaza.

                                En la planta baja : Sala de Estar, donde se ubican un sofacama de una plaza y otra cama
                                desplazable de una plaza. Comedor diario, cocina y baño completo.

                                Deck techado de madera, con mesa, sillas y vista panorámica a los jardines del predio.
                                Cochera techada individual y adjunta a la cabaña. Parrilla individual.</p>
                            <a href="https://wa.me/2494549919?text=Hola, %20quiero%20saber%20disponibilidad%20para%20los%20días%20"
                                target="_blank" class="btn btn-primary btn-success w-100 py-2">Consulte fecha</a>
                        </div>
                    </div>
                </div> -->

            <!-- Del Puente -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="room-item bg-white rounded d-flex h-100 p-4">
                    <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                        style="width: 80px">
                        <div class="btn-success text-white py-3">
                            <small>Hasta</small>
                            <h5 class="text-white mb-0">2</h5>
                            <small>personas</small>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/radar.png" alt="logo de radar">
                            <p class="small mb-0">DirecTV</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/tv-ancha.png" alt="tv led">
                            <p class="small mb-0">TV Led 32"</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/horno-microondas.png" alt="logo microondas">
                            <p class="small mb-0">Microondas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/ducha.png" alt="logo de una ducha">
                            <p class="small mb-0">Ducha presurizada</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                            <p class="small mb-0">Sommier a resortes 2 plazas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/chimenea.png" alt="hogar a leña">
                            <p class="small mb-0">Salamandra a leña</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                            <p class="small mb-0">AA</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/wifi.png" alt="logo wifi">
                            <p class="small mb-0">Wifi</p>
                        </div>
                    </div>
                    <div class="room-detail">
                        <!-- Imagen que abre el modal -->
                        <div id="imgModal" class="position-relative rounded overflow-hidden mb-3">
                            <div class="position-absolute top-0 start-0 text-white small py-1 px-3">Ver Imágenes
                            </div>
                            <picture>
                                <!-- Imagen para moviles -->
                                <source srcset="img/cabs/cab3/cab3_frontal.webp" media="(max-width: 768px)"
                                    class="img-thumbnail" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab3">
                                <!-- Imagen para tablets -->
                                <source srcset="img/cabs/cab3/cab3_frontal.webp" media="(max-width: 1200px)"
                                    class="img-thumbnail" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab3">
                                <!-- Imagen para PC -->
                                <img src="img/cabs/cab3/cab3_frontal.webp" alt="Imagen de frente"
                                    class="img-princ img-fluid w-100" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab3">
                            </picture>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="carouselModalCab3" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Botón de cierre -->
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal" aria-label="Cerrar">X</button>
                                    <div class="modal-body p-0">
                                        <!-- Carrusel dentro del modal -->
                                        <div id="carouselCab3" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab3/cab3_puente-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab3/cab3_puente.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3_puente.webp"
                                                            alt="Imagen principal de frente"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab3/cab3_deck-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab3/cab3_deck.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3_deck.webp"
                                                            alt="Imagen de living y escalera"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source
                                                            srcset="img/cabs/cab3/cab3-vista_diagonal_desde_frente-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source
                                                            srcset="img/cabs/cab3/cab3-vista_diagonal_desde_frente.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3-vista_diagonal_desde_frente.webp"
                                                            alt="Imagen de entrada" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab3/cab3_puerta_atras-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab3/cab3_puerta_atras.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3_puerta_atras.webp"
                                                            alt="Imagen de parrilla" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source
                                                            srcset="img/cabs/cab3/cab3-entrada_desde_atras-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab3/cab3-entrada_desde_atras.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3-entrada_desde_atras.webp"
                                                            alt="Imagen de camas" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab3/cab3-cama_fondo-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab3/cab3-cama_fondo.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3-cama_fondo.webp"
                                                            alt="Imagen de la cocina" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab3/cab3-baño-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab3/cab3-baño.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab3/cab3-baño.webp"
                                                            alt="Imagen del comedor" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                            </div>
                                            <!-- Controles -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselCab3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselCab3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label class="h5 d-inline-block">Del Puente</label>
                        <p>Una espléndida y moderna construcción, monoambiente, ideal para 2 personas, o bien para
                            pareja con bebé...

                            Posee 38 mts2 de superficie habitable, con todas sus instalaciones en planta baja. Con
                            un hermoso Deck techado, demadera, con un muy pintorescopuente de madera exclusivo para
                            la cabaña, con rosales en su pérgola..

                            Cochera individual y adjunta, protegida por la frondosa copa de dos acacias. Parrilla
                            individual.</p>
                        <a href="#" class="btn btn-primary btn-success w-100 py-2"
                            onclick="abrirVideo('img/cabs/cab3/house_tour/tour_del_puente.mp4'); return false;">
                            HOUSE TOUR
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="room-item bg-white rounded d-flex h-100 p-4">
                        <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                            style="width: 80px">
                            <div class="btn-success text-white py-3">
                                <h5 class="text-white mb-0">$100</h5>
                                <small>Per Night</small>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/radar.png" alt="logo de radar">
                                <p class="small mb-0">DirecTV</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/tv-ancha.png" alt="tv led">
                                <p class="small mb-0">TV Led 32"</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/microondas.png" class="text-primary" width="20px"
                                    alt="logo microondas">
                                <p class="small mb-0">Microondas</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-shower text-primary" aria-hidden="true"></i>
                                <p class="small mb-0">Ducha presurizada</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                                <p class="small mb-0">Sommier 2 plazas</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-circle text-primary"></i>
                                <p class="small mb-0">Salamandra a leña</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                                <p class="small mb-0">AA</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-wifi text-primary"></i>
                                <p class="small mb-0">Wifi</p>
                            </div>
                        </div>
                        <div class="room-detail">
                            <div class="position-relative rounded overflow-hidden mb-3">
                                <img class="img-fluid w-100" src="img/cabs/cab3/cab3_frontal.webp"
                                    alt="cabaña del puente">
                            </div>
                            <label class="h5 d-inline-block">Del Puente</label>
                            <p>Una espléndida y moderna construcción, monoambiente, ideal para 2 personas, o bien para
                                pareja con bebé...

                                Posee 38 mts2 de superficie habitable, con todas sus instalaciones en planta baja. Con
                                un hermoso Deck techado, demadera, con un muy pintorescopuente de madera exclusivo para
                                la cabaña, con rosales en su pérgola..

                                Cochera individual y adjunta, protegida por la frondosa copa de dos acacias. Parrilla
                                individual.</p>
                            <a href="https://wa.me/2494549919?text=Hola, %20quiero%20saber%20disponibilidad%20para%20los%20días%20"
                                target="_blank" class="btn btn-primary btn-success w-100 py-2">Consulte fecha</a>
                        </div>
                    </div>
                </div> -->
            <!-- Casagrande -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="room-item bg-white rounded d-flex h-100 p-4">
                    <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                        style="width: 80px">
                        <div class="btn-success text-white py-3">
                            <small>Hasta</small>
                            <h5 class="text-white mb-0">5</h5>
                            <small>personas</small>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/radar.png" alt="logo de radar">
                            <p class="small mb-0">DirecTV</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/tv-ancha.png" alt="tv led">
                            <p class="small mb-0">TV Led 32"</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/horno-microondas.png" alt="logo microondas">
                            <p class="small mb-0">Microondas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/ducha.png" alt="logo de una ducha">
                            <p class="small mb-0">Ducha presurizada</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                            <p class="small mb-0">3 Camas sommier de 2 plazas</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/chimenea.png" alt="hogar a leña">
                            <p class="small mb-0">Salamandra a leña</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                            <p class="small mb-0">2 AA (1 en cada planta)</p>
                        </div>
                        <div class="text-center mx-auto">
                            <img src="img/logos/wifi.png" alt="logo wifi">
                            <p class="small mb-0">Wifi</p>
                        </div>
                    </div>
                    <div class="room-detail">
                        <!-- Imagen que abre el modal -->
                        <div id="imgModal" class="position-relative rounded overflow-hidden mb-3">
                            <div class="position-absolute top-0 start-0 text-white small py-1 px-3">Ver Imágenes
                            </div>
                            <picture>
                                <!-- Imagen para moviles -->
                                <source srcset="img/cabs/cab4/casagrande.webp" media="(max-width: 768px)"
                                    class="img-thumbnail" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab4">
                                <!-- Imagen para tablets -->
                                <source srcset="img/cabs/cab4/casagrande.webp" media="(max-width: 1200px)"
                                    class="img-thumbnail" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab4">
                                <!-- Imagen para PC -->
                                <img src="img/cabs/cab4/casagrande.webp" alt="Imagen de entrada"
                                    class="img-princ img-fluid w-100" data-bs-toggle="modal"
                                    data-bs-target="#carouselModalCab4">
                            </picture>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="carouselModalCab4" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Botón de cierre -->
                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal" aria-label="Cerrar">X</button>
                                    <div class="modal-body p-0">
                                        <!-- Carrusel dentro del modal -->
                                        <div id="carouselCab4" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab4/cab4-comedor-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-comedor.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-comedor.webp"
                                                            alt="Imagen del comedor" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab4/cab4-de_frente-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-de_frente.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-de_frente.webp"
                                                            alt="Imagen vista frontal" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab4/cab4-cochera-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-cochera.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-cochera.webp"
                                                            alt="Imagen de cochera" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab4/cab4-escalera-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-escalera.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-escalera.webp"
                                                            alt="Imagen de escalera" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source
                                                            srcset="img/cabs/cab4/cab4-escalera_sillones-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-escalera_sillones.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-escalera_sillones.webp"
                                                            alt="Imagen de sillones" class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source srcset="img/cabs/cab4/cab4-hab-grande_tv-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-hab-grande_tv.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-hab-grande_tv.webp"
                                                            alt="Imagen de habitacion grande"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                                <div class="carousel-item">
                                                    <picture>
                                                        <!-- Imagen para moviles -->
                                                        <source
                                                            srcset="img/cabs/cab4/cab4-hab_chica_puerta-movil.webp"
                                                            media="(max-width: 768px)" class="img-thumbnail">
                                                        <!-- Imagen para tablets -->
                                                        <source srcset="img/cabs/cab4/cab4-hab_chica_puerta.webp"
                                                            media="(max-width: 1200px)" class="img-thumbnail">
                                                        <!-- Imagen para PC -->
                                                        <img src="img/cabs/cab4/cab4-hab_chica_puerta.webp"
                                                            alt="Imagen de habitacion chica"
                                                            class="img-fluid w-100">
                                                    </picture>
                                                </div>
                                            </div>
                                            <!-- Controles -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselCab4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselCab4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label class="h5 d-inline-block">Casagrande</label>
                        <p>Posee dos plantas, ideal para un grupo
                            familiar grande o para dos familias. Es una magnífica construcción de estilo alpino, con
                            103 mts2 de superficie habitable, y con finas maderas en su interior.

                            Tiene dos dormitorios de gran categoría en su planta alta. En planta baja : Sala de
                            Estar con sillones de algarrobo, comedor diario, cocina y baño completo; deck de madera
                            techado con mesa y sillas... y vista panorámica al jardín del predio y a las serranías
                            cercanas.

                            Tiene cochera adjunta techada e individual, y parrilla techada familiar, con amplia
                            mesada.</p>
                        <a href="#" class="btn btn-primary btn-success w-100 py-2"
                            onclick="abrirVideo('img/cabs/cab4/house_tour/tour_casagrande.mp4'); return false;">
                            HOUSE TOUR
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="room-item bg-white rounded d-flex h-100 p-4">
                        <div class="bg-light rounded overflow-hidden flex-shrink-0 d-flex flex-column justify-content-between text-center pb-4 me-3"
                            style="width: 80px">
                            <div class="btn-success text-white py-3">
                                <h5 class="text-white mb-0">$100</h5>
                                <small>Per Night</small>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/radar.png" alt="logo de radar">
                                <p class="small mb-0">DirecTV</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/tv-ancha.png" alt="tv led">
                                <p class="small mb-0">3 TV Led 32"</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/microondas.png" class="text-primary" width="20px"
                                    alt="logo microondas">
                                <p class="small mb-0">Microondas</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-shower text-primary" aria-hidden="true"></i>
                                <p class="small mb-0">Ducha presurizada</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/cama-matrimonial.png" alt="logo cama 2 plazas">
                                <p class="small mb-0">3 Sommier de 2 plazas</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-circle text-primary"></i>
                                <p class="small mb-0">Salamandra a leña</p>
                            </div>
                            <div class="text-center mx-auto">
                                <img src="img/logos/acondicionador-de-aire.png" alt="aire acondicionado">
                                <p class="small mb-0">2 AA</p>
                            </div>
                            <div class="text-center mx-auto">
                                <i class="fa fa-wifi text-primary"></i>
                                <p class="small mb-0">Wifi</p>
                            </div>
                        </div>
                        <div class="room-detail">
                            <div class="position-relative rounded overflow-hidden mb-3">
                                <img class="img-fluid w-100" src="img/cabs/cab4/cab4-entrada_deck.webp"
                                    alt="cabaña casagrande">
                            </div>
                            <label class="h5 d-inline-block">Casagrande</label>
                            <p>Tiene capacidad para alojar hasta 6 personas. Posee dos plantas, ideal para un grupo
                                familiar grande o para dos familias. Es una magnífica construcción de estilo alpino, con
                                103 mts2 de superficie habitable, y con finas maderas en su interior.

                                Tiene dos dormitorios de gran categoría en su planta alta. En planta baja : Sala de
                                Estar con sillones de algarrobo, comedor diario, cocina y baño completo; deck de madera
                                techado con mesa y sillas... y vista panorámica al jardín del predio y a las serranías
                                cercanas.

                                Tiene cochera adjunta techada e individual, y parrilla techada familiar, con amplia
                                mesada.</p>
                            <a href="https://wa.me/2494549919?text=Hola, %20quiero%20saber%20disponibilidad%20para%20los%20días%20"
                                target="_blank" class="btn btn-primary btn-success w-100 py-2">Consulte fecha</a>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>
<!-- Cabañas End -->

<div id="videoModal" class="video-modal">

    <span class="cerrar" onclick="cerrarVideo()">✕</span>

    <video id="houseVideo" controls>
        <source id="videoSource" src="" type="video/mp4">
    </video>

</div>

<?php include 'includes/footer.php'; ?>