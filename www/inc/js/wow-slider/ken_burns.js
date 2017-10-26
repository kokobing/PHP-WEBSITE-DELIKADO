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
function ws_kenburns(p,j,c){var f=jQuery;var l=p.width,g=p.height;var a=document.createElement("canvas").getContext;var o=p.paths||[{from:[0,0,1],to:[0,0,1.2]},{from:[0,0,1.2],to:[0,0,1]},{from:[1,0,1],to:[1,0,1.2]},{from:[0,1,1.2],to:[0,1,1]},{from:[1,1,1],to:[1,1,1.2]},{from:[0,0,1.2],to:[1,0,1.2]},{from:[0,1,1.2],to:[1,1,1.2]},{from:[1,0,1.2],to:[1,1,1.2]},{from:[0,0,1.2],to:[0,1,1.2]},{from:[1,0,1.2],to:[0,1,1.2]},{from:[0.5,1,1],to:[0.5,1,1.3]},{from:[1,0.5,1.2],to:[1,0.5,1]},{from:[1,0.5,1],to:[1,0.5,1.2]},{from:[0,0.5,1.2],to:[0,0.5,1]},{from:[1,0.5,1.2],to:[1,0.5,1]},{from:[0.5,0.5,1],to:[0.5,0.5,1.2]},{from:[0.5,0.5,1.3],to:[0.5,0.5,1]},{from:[0.5,1,1],to:[0.5,0,1.15]}];function n(h){return o[h?Math.floor(Math.random()*(a?o.length:Math.min(10,o.length))):0]}function d(u,r){var t,h=0,q=40/r;var v=setInterval(function(){if(h<1){if(!t){t=1;u(h);t=0}h+=q}else{s(1)}},40);function s(w){clearInterval(v);if(w){u(1)}}return{stop:s}}var m;var i;if(a){var e=f('<canvas width="'+l+'" height="'+g+'"/>');e.appendTo(c);e.css({"z-index":8,position:"absolute",left:0,top:0});m=e.get(0).getContext("2d")}function b(s,q,h){var r={width:l*s[2]+"px"};r[q?"right":"left"]=-l*(s[2]-1)*(q?(1-s[0]):s[0])+"px";r[h?"bottom":"top"]=-g*(s[2]-1)*(h?(1-s[1]):s[1])+"px";return r}function k(h,r,q){if(m){if(i){i.stop()}i=d(function(s){var t=[r.from[0]*(1-s)+s*r.to[0],r.from[1]*(1-s)+s*r.to[1],r.from[2]*(1-s)+s*r.to[2]];m.globalAlpha=(q?Math.min(s*(1+p.delay/p.duration),1):1);m.drawImage(h,-l*(t[2]-1)*t[0],-g*(t[2]-1)*t[1],l*t[2],g*t[2])},p.duration+p.delay)}else{h=f(h);h.css({left:"auto",right:"auto",top:"auto",bottom:"auto"}).css(b(r.from,r.from[0]>0.5,r.from[1]>0.5)).stop(1,1).animate(b(r.to,r.from[0]>0.5,r.from[1]>0.5),{easing:"linear",queue:false,duration:(p.duration+p.delay)});if(q){h.fadeIn(p.duration)}}}j.each(function(h){f(this).css({left:"auto",top:"auto",right:"auto",bottom:"auto"});if(!h){k(this,n(0),0)}else{f(this).hide()}});this.go=function(h,q){k(j.get(h),n(h),1);if(!m){f(j.get(q)).fadeOut(p.duration)}return h}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-10-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"kenburns",prev:"",next:"",duration:25*100,delay:20*100,outWidth:980,outHeight:450,width:980,height:450,autoPlay:true,stopOnHover:true,loop:false,bullets:true,caption:true,controls:false});