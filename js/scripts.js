$(document).ready(function(){

   $('#gallery-1').royalSlider({
    addActiveClass: true,
    arrowsNav: false,
    controlNavigation: 'none',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 650,
    loop: true,
    fadeinLoadedSlide: false,
    globalCaption: true,
    keyboardNavEnabled: true,
    block: {
        		// animated blocks options go gere
        		moveEffect: 'right'
        	}
  });

/// filters

$('ul#filters li a').click(function(){

  $('ul#filters li a').removeClass('port-active');
   $(this).addClass('port-active');
   
});


/// sticky

  $('#sticky-menu').stickyScroll({ container: '.services-contiainer' });

});