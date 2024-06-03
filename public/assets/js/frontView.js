// Accept policy modal opens evertime on window load
window.onload = () => {
    const myModal = new bootstrap.Modal('#indexModal');
    myModal.show();
}

// initailising car swiper of featured city page
var swiper = new Swiper(".carSwiper", {
     
    loop: true,
    grabCursor: true,
    
     
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
    },
    breakpoints: {
      340: {
        slidesPerView: 5,
        spaceBetween: 5,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 20,
      },
    },
     
});

// initialising exclisveCarSwiper
var swiper = new Swiper(".exclusiveCarSwiper", {
  slidesPerView: 4,
  loop: true,
   
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
    300: {
      slidesPerView: 3,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    800: {
      slidesPerView: 4,
      spaceBetween: 20,
      loop: true,
    },
  },
});




// initialising footer top premium car swiper of featured city page
var swiper = new Swiper(".footerPremiumCarSwiper", {
  effect: "coverflow",
      grabCursor: true,
      slidesPerView: 4,
      spaceBetween: 10,
      loop: true,
      // cssMode: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 70,
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




 
 

 