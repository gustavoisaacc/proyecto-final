import Swiper from './swiper';

document.querySelector('.video-slider').classList.add('start')
  var mySwiper = new Swiper ('.video-slider', {
    // Optional parameters
    autoHeight: true, //enable auto height
    loop: true,
    slidesPerView:3,
    spaceBetween: 30,
    centeredSlides: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  })

  setTimeout(()=>{
    document.querySelector('.video-slider').classList.add('effect-on')
  },1000)
 