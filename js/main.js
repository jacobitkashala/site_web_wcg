const btnNavigation = document.querySelector('#menu-btn')
const menuBtn = document.querySelector('#menu-btn')
// btn qui permet d'afficher et cacher le sous menu
const btnSousMenu = document.querySelector('.icon-cog')
const btnToTopNavigation = document.querySelector('.scrollTop')
const navBar = document.querySelector('.header_nav_container')
const containerSousMenu = document.querySelector('.sous-menu')

const header = document.getElementById('#main-menu')
const btonLinks = document.getElementsByClassName('link')

/**/
/*
  Cacher le sous-menu qui est visible lorsqu'on 
  scroll
*/
let scrollValue = $(window).scrollTop()
// console.log('Scroll value: ' + scrollValue)

// if (window.scrollY > 100) {
//   btnToTopNavigation.style.display = 'fixed'
// } else {
//   btnToTopNavigation.style.display = 'none'
// }
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

/* Appliquer le style active au menu principal */
const listMennu = document.querySelectorAll('li.menu')
// const playlist = document.getElementById('playlist')
let indexActive=0;

// console.log(listMennu)

/* Lecteur video */

const mainVideo = document.querySelector('#main-Video')
const playlist = document.getElementById('playlist')
const videos = [
  {
    srcvVideo: 'http://wcg-rdc.com/video/gespat.mp4',
    src: 'https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg',
    id: '1',
  },
  {
    srcvVideo:
      'https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4',
    src: 'https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg',
    id: '2',
  },
  {
    srcvVideo: '../media/video/safari_beach.mp4',
    src: 'https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg',
    id: '3',
  },
]
let indexVideo = videos[0].id
window.addEventListener('load', () => {
  loadVideo(indexVideo)
  playingNow()
})

for (let index = 0; index < videos.length; index++) {
  let element = `<img li-index="${videos[index].id}"
  class="item-video img-fluid image-${videos[index].id} "
  src="${videos[index].src}"
  alt=""
  srcset=""
/>`
  playlist.insertAdjacentHTML('beforeend', element)
}

const allTagsVideo = playlist.querySelectorAll('img')

function playingNow() {
  for (let index = 0; index < videos.length; index++) {
    // console.log(allTagsVideo[index].getAttribute('li-index') == indexVideo)
    if (allTagsVideo[index].classList.contains('playing')) {
      allTagsVideo[index].classList.remove('playing')
      allTagsVideo[index].classList.remove('active-video-Playing')
    }
    if (allTagsVideo[index].getAttribute('li-index') == indexVideo) {
      allTagsVideo[index].classList.add('playing')
      allTagsVideo[index].classList.add('active-video-Playing')
    }
    // On ajoute un attribut qui permet de faire le clique sur tout le tags
    allTagsVideo[index].setAttribute('onclick', 'clicked(this)')
  }
}

function playVideo() {
  mainVideo.play()
  mainVideo.autoplay = 'autoplay'
}
function loadVideo(indexElement) {
  let currentElement = videos.filter((element) => element.id == indexElement)
  const { srcvVideo } = currentElement[0]
  mainVideo.src = `${srcvVideo}`
}
// clicked lecteur liste
function clicked(element) {
  let getIndex = element.getAttribute('li-index')
  indexVideo = getIndex
  loadVideo(indexVideo)
  playVideo()
  playingNow()
}
