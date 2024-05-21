// Accept policy modal opens evertime on window load
window.onload = () => {
    const myModal = new bootstrap.Modal('#indexModal');
    myModal.show();
}

// search bar toggle dependent dropdown 
const inputBox = document.getElementById('searchBar');
const element = document.getElementById('dropdownSearch');

inputBox.addEventListener("click", ()=>{
  element.classList.remove('d-none');
  inputBox.setAttribute('value', '');

});


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

// intialising topPremiumCarSwiper
var swiper = new Swiper(".topPremiumCarSwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode : true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
 
});


// initialising footer top premium car swiper of featured city page
var swiper = new Swiper(".footerPremiumCarSwiper", {
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
 

 