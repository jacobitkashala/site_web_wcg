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
const btnNavigation = document.querySelector('#menu-btn')
const menuBtn = document.querySelector('#menu-btn')
const btnSousMenu = document.querySelector('.icon-cog')
const navBar = document.querySelector('.header_nav_container')
const containerSousMenu = document.querySelector('.sous-menu')

menuBtn.addEventListener('click', () => {
  navBar.classList.toggle('active')
  menuBtn.classList.toggle('fa-times')
})
let active = true

btnSousMenu?.addEventListener('click', () => {
  if (active) {
    // console.log('active')
    containerSousMenu.classList.remove('sous-menu')
    containerSousMenu.classList.add('disable-menu')
    active = false
  } else {
    active = true
    containerSousMenu.classList.remove('disable-menu')
    containerSousMenu.classList.add('sous-menu')
    // console.log('desactive')
  }
  // containerSousMenu.style.display = 'block'
  // containerSousMenu.classList.add('sous-menu')
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

// Slider partenaire
$(function () {
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
  })
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
  })
})
// par
$(document).on('ready', function () {
  $('.regular').slick({
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
  })
  $('.center').slick({
    dots: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 3,
  })

})
// Confirmer delete ressource
function confirmDeleteRessource(idRessource){
  console.log(idRessource)

} 