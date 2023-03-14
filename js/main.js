const btnNavigation = document.querySelector('#menu-btn')
const menuBtn = document.querySelector('#menu-btn')
// btn qui permet d'afficher et cacher le sous menu
const btnSousMenu = document.querySelector('.icon-cog')
const btnToTopNavigation = document.querySelector('.scrollTop')
const navBar = document.querySelector('.header_nav_container')
const containerSousMenu = document.querySelector('.sous-menu')

const header = document.getElementById('#main-menu')
const btonLinks = document.getElementsByClassName('link')

/*
  Cacher le sous-menu qui est visible lorsqu'on 
  scroll
*/
let scrollValue = $(window).scrollTop()
// console.log('Scroll value: ' + scrollValue)

if (window.scrollY > 100) {
  btnToTopNavigation.style.display = 'fixed'
} else {
  btnToTopNavigation.style.display = 'none'
}
window.onscroll = () => {
  // if (scrollValue == 0) {
  //   btnToTopNavigation.style.display = 'none'
  // } else {
  //   btnToTopNavigation.style.display = 'block'
  // }
  // menuBtn.classList.remove('fa-times')
  // navBar.classList.remove('active')
  // containerSousMenu.style.display = 'none'
}
// if (scrollValue == 0) {
//   btnToTopNavigation.style.display = 'none'
// } else {
//   btnToTopNavigation.style.display = 'block'
// }
menuBtn.addEventListener('click', () => {
  navBar.classList.toggle('active')
  menuBtn.classList.toggle('fa-times')
})

let active = true

btnSousMenu?.addEventListener('click', () => {
  if (active) {
    // console.log('active')
    // containerSousMenu.style.display = 'bloc'
    // display: none;
    containerSousMenu.classList.remove('sous-menu')
    containerSousMenu.classList.add('disable-menu')
    active = false
  } else {
    active = true
    // containerSousMenu.style.display = 'none'
    containerSousMenu.classList.remove('disable-menu')
    containerSousMenu.classList.add('sous-menu')
    // console.log('desactive')
  }
})

// Slider Home
// $(document).on('ready', function () {
//   $('.single-item').slick({
//     infinite: true,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
//   })
// })

// slide home
const swiper = new Swiper('.home-slider', {
  loop: true,
  // slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
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
// desactiver le click
// document.addEventListener('contextmenu', (event) => {
//   event.preventDefault()
// })

// clique bton top
function scrollToTop() {
  window.scrollTo(0, 0)
}

// Nos parternaire slider
$(document).on('ready', function () {
  $('.regular').slick({
    spaceBetween: 30,
    infinite: true,
    dots: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  })
})
// Confirmer delete ressource

// slide partnaire
const swiperPart = new Swiper('.slide-container', {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  loopFilleGroupWithBlank: true,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination-part',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-part',
    prevEl: 'swiper-button-prev-part',
  },
  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
})
