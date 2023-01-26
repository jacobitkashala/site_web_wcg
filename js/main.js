// slide jquery partners
$(document).ready(function () {
  $('.patners-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        setting: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        setting: {
          slidesToShow: 3,
        },
      },
    ],
  })
})
//btn menu
const menuBtn = document.querySelector('#menu-btn')
const navBar = document.querySelector('.header_nav_container')
const expertise = document.querySelector('.header_nav_container a:hover')

menuBtn.addEventListener('click', () => {
  // console.log("eeeeee")
  navBar.classList.toggle('active')
  menuBtn.classList.toggle('fa-times')
  // menuBtn.append.name='fermae';
})

expertise.addEventListener('click', () => {
  expertise.classList.addClass('header_nav_non_active')
})

const swiper = new Swiper('.home-slider', {
  loop: true,

  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})

const swiperPartner = new Swiper('.partner_slide', {
  loop: true,

  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-partners',
    prevEl: '.swiper-button-prev-partners',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
