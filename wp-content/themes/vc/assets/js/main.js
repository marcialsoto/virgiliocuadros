/* Author:

*/

$(window).load(function() {
  $('#myModal').modal();
  $("li.active").append('<i class="icon-caret-down"></i>');
	
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider' 
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    sync: "#carousel",
	slideshowSpeed: 2000, 
  });
});

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
	controlNav: false,
	directionNav: false,
	slideshow: true,
	slideshowSpeed: 3000
  });
});
