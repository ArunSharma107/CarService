// Accept policy modal opens evertime on window load
window.onload = () => {
    const myModal = new bootstrap.Modal('#indexModal');
    myModal.show();
}

// initailising car swiper of featured city page
var swiper = new Swiper(".carSwiper", {
    slidesPerView: 10,
    loop: true,
    cssMode: true,
    spaceBetween: 20,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
     
});

// initialising exclisveCarSwiper
var swiper = new Swiper(".exclusiveCarSwiper", {
  slidesPerView: 3,
  loop: true,
  cssMode: true,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
});




// initialising footer top premium car swiper of featured city page
var swiper = new Swiper(".footerPremiumCarSwiper", {
  effect: "coverflow",
      grabCursor: true,
      slidesPerView: 5,
      loop: true,
      // cssMode: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 80,
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




 
 

 