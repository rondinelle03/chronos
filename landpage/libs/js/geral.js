$(document).ready(function(){


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