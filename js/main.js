// $(document).ready(function(){
// 	$('.customer-logos').slick({
// 		slidesToShow: 6,
// 		slidesToScroll: 1,
// 		autoplay: true,
// 		autoplaySpeed: 1500,
// 		arrows: false,
// 		dots: false,
// 		pauseOnHover:false,
// 		responsive: [{
// 			breakpoint: 768,
// 			setting: {
// 				slidesToShow:4
// 			}
// 		}, {
// 			breakpoint: 520,
// 			setting: {
// 				slidesToShow: 3
// 			}
// 		}]
// 	});
// });

const  menuBtn=document.querySelector('#menu-btn');
const navBar=document.querySelector('.header_nav_container')

menuBtn.addEventListener('click',()=>{
	// console.log("eeeeee")
	navBar.classList.toggle('active');
	menuBtn.classList.toggle('fa-times');
	// menuBtn.append.name='fermae';
})