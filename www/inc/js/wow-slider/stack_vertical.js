// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-10-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_stack_vertical(c,a,b){var d=jQuery;this.go=function(e,k,h,f){var i=(e-k+1)%a.length;if(Math.abs(f)>=1){i=(f>0)?0:1}var j=d(a.get(i?k:e));var l=d(a.get(i?e:k));a.each(function(m){if(i&&m!=k){this.style.zIndex=(Math.max(0,this.style.zIndex-1))}});var g=i?0:-c.height;l.stop(1,1).css({"z-index":4,top:(-c.height-g+"px")});if(!i){j.stop(1,1).css({top:0})}j.css({"z-index":3});l.animate({top:(g+"px")},c.duration,"easeInOutExpo");return e}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-10-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"stack_vertical",prev:"",next:"",duration:20*100,delay:20*100,outWidth:980,outHeight:450,width:980,height:450,autoPlay:true,stopOnHover:true,loop:false,bullets:true,caption:true,controls:false});