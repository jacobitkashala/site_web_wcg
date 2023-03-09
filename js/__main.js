// slide jquery partners
//btn menu
const btnNavigation = document.querySelector('#menu-btn')
const menuBtn = document.querySelector('#menu-btn')
const btnSousMenu = document.querySelector('.icon-cog')
const navBar = document.querySelector('.header_nav_container')
const containerSousMenu = document.querySelector('.sous-menu')

const header = document.getElementById('#main-menu')
const btonLinks = document.getElementsByClassName('link')
// Bloc de sous menu
const blocSubMenu = document.getElementsByClassName('sous-menu')

const gridSubMenu = document.getElementsByClassName('grid-item')

// Bton active
// for(let i=0 ; i < btonLinks.length ;i++){
//   btonLinks[i].addEventListener("click",()=>{
//     let current = document.getElementsByClassName("active-menu");
//     current[0].className=
//     current[0].className.replace("active-menu","")
//     this.className += "active-menu"
//   })

// }

/*
  Cacher le sous-menu qui est visible lorsqu'on 
  scroll
*/
// let scrollValue = $(window).scrollTop()
// console.log('Scroll value: ' + scrollValue)
blocSubMenu.addEventListener('click', () => {
  console.log('click')
})

window.onscroll = () => {
  // menuBtn.classList.remove('fa-times')
  // navBar.classList.remove('active')
}

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
// $(function () {
//   $('.slider-for').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav',
//   })
//   $('.slider-nav').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     asNavFor: '.slider-for',
//     dots: true,
//     centerMode: true,
//     focusOnSelect: true,
//   })
// })

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
  $('.center').slick({
    // dots: true,
    // infinite: true,
    // centerMode: true,
    // slidesToShow: 5,
    // slidesToScroll: 3,
  })
})
// Confirmer delete ressource
function confirmDeleteRessource(idRessource) {
  console.log(idRessource)
}

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
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
