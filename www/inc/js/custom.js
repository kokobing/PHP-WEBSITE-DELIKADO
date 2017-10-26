$(window).load(function(){
		
    $('#sliderbox').flexslider({
        animation: "fade",
		easing: "swing",  
		controlNav: false, 
		directionNav: false, 
		slideshowSpeed: 3000,  
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
 });