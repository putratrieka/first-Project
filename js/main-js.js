$(document).ready(function(){
	$('.slider').bxSlider({
		mode:'fade',
		auto: true
	});

	$('.owl-carousel').owlCarousel({
	center:true,
	items:4,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
}) 
});

 	