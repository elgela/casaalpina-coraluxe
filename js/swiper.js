  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 3000, // cambia cada 3 segundos
        disableOnInteraction: false, // sigue aunque el usuario interactúe
      },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: { // flechas en PC
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // En móviles ya soporta swipe automáticamente
  });
