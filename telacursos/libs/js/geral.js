$(document).ready(function(){

	$('.banne-anima').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    dots:false,
	    items:1,
	   
	});


	$('.videos-anima').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    }
	});


});

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  //document.body.style.backgroundColor = "white";
}