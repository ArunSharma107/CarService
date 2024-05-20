// window.onload = () => {
//     const myModal = new bootstrap.Modal('#indexModal');
//     myModal.show();
// }
 
 

// search bar filter of featured city page
let availableKeywords = [
          'Maharashtra',
          'Thane',
          'Pune',
          'Worli',
          'South Delhi',
          'Chandigarh',
          'Abbosford',
          'Bandra',
          'Agartala',
          'Agra',
];

const searchResult = document.querySelector('#searchResult');
const inputBox = document.getElementById('searchBar');
const element = document.getElementById('dropdownSearch');


inputBox.onkeyup = function(){
    let result = [];
    let input = inputBox.value;

    if(input.length) {
      result = availableKeywords.filter((keyword)=>{
         return keyword.toLowerCase().includes(input.toLowerCase());
      });
    display(result);
    } 
}

function display(result){
  const data = result.map((list)=>{
    return '<span class="badge text-bg-light p-2 search-key" onclick=selectInput(this)>'+ list + '</span> ';
  });
  searchResult.innerHTML = data.join(' ');
}

function selectInput(list){
  inputBox.value = list.innerHTML;
  searchResult.innerHTML = '';
  element.classList.remove('d-none'); 
}



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


 