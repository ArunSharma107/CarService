// window.onload = () => {
//     const myModal = new bootstrap.Modal('#indexModal');
//     myModal.show();
// }
// initailising car swiper of featured city page
var swiper = new Swiper(".carSwiper", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

// initialising top premium car swiper of featured city page
var swiper = new Swiper(".topPremiumCarSwiper", {
  effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
  autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});



