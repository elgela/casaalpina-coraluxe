(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('position-fixed bg-dark shadow-sm');
        } else {
            $('.navbar').removeClass('position-fixed bg-dark shadow-sm');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

})(jQuery);

// Menu collapse
document.addEventListener('DOMContentLoaded', function () {
    var navbarCollapse = document.querySelector('.navbar-collapse');

    // Escuchar clicks en todos los links dentro del menú
    navbarCollapse.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            // Ignorar el toggle del dropdown (ej: "Cabañas")
            if (link.classList.contains('dropdown-toggle')) return;

            // Cerrar el menú hamburguesa si está abierto
            var bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
            bsCollapse.hide();
        });
    });
});

// Counter Fact
function animateCounter(counter) {
    const target = +counter.getAttribute('data-target');
    let current = 0;
    const increment = target / 100; // velocidad del conteo

    const updateCounter = () => {
        current += increment;
        if (current < target) {
            counter.textContent = Math.ceil(current);
            requestAnimationFrame(updateCounter);
        } else {
            counter.textContent = target; // asegurar número final exacto
        }
    };

    updateCounter();
}

const counters = document.querySelectorAll('.counter');
const options = { threshold: 0.5 };

const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            obs.unobserve(entry.target); // que se ejecute solo una vez
        }
    });
}, options);

counters.forEach(counter => {
    observer.observe(counter);
});

// Mostrar modal al cargar la página
window.onload = function () {
    setTimeout(function () {
        var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        myModal.show();
    }, 1000); // 1000 ms = 1 segundo
};

///////////////// paginacion //////////////
let pagina = 0;
const postsPorPagina = 4;
let posts = [];


// Cargar posts desde el archivo JSON
fetch("posts.json")
  .then(response => response.json())
  .then(data => {
    posts = data;
    mostrarPosts();
  });

function mostrarPosts() {
  const contenedor = document.getElementById("posts");
  const inicio = pagina * postsPorPagina;
  const fin = inicio + postsPorPagina;
  const nuevosPosts = posts.slice(inicio, fin);

  nuevosPosts.forEach(post => {
    const div = document.createElement("div");
    div.classList.add("post");
    div.innerHTML = `
                <div class="col-12 col-md-12">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-img">
                            <img src="${post.imagen}"
                                alt="${post.titulo}" loading="lazy">
                        </div>
                        <div class="blog-text">
                            <h2>${post.titulo}</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>${post.autor}</p>
                                <p><i class="far fa-list-alt"></i>${post.tema}</p>
                                <p><i class="far fa-calendar-alt"></i>${post.fecha}</p>
                            </div>
                            <p>${post.contenido}</p>
                            <a class="btn_blog" href="${post.boton}"
                                target="_blank">Leer más <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

    `;
    contenedor.appendChild(div);
  });

  if (fin >= posts.length) {
    document.getElementById("verMas").style.display = "none";
  }
}
document.getElementById("verMas").addEventListener("click", () => {
  pagina++;
  mostrarPosts();
});
