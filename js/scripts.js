


$(document).ready(function() {
 
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
    navigation : true,
    singleItem : true,
    transitionStyle : "fade",
    autoPlay: true,
    navigation : false,
  });

  $('.hamburger').on('click', function(){
		$('.menu').slideToggle();
	});		
 
});