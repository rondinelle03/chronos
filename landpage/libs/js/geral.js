$(document).ready(function(){

$('#cus-destaques').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

$('.navbar  a').click(function(){

                $('.navbar  a').removeClass('active');

                $(this).addClass('active');
    });


	var nav = $('.navbar');

	 $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });

});

$(function() {
                $('.nav-link').bind('click',function(event){
                    var $anchor = $(this);
        
                  $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1000,'swing');
                    
                  

                });
            });