$(function(){

   // jQuery methods go here...
  $('#message').delay(3000).fadeOut(3000);
 
           var segmenter = new Segmenter(document.querySelector('.segmenter'), {
               //four squares
//               				pieces: 4,
//					animation: {
//						duration: 1500,
//						easing: 'easeInOutExpo',
//						delay: 100,
//						translateZ: 100
//					},
//					parallax: true,
//					positions: [
//						{top: 0, left: 0, width: 45, height: 45},
//						{top: 55, left: 0, width: 45, height: 45},
//						{top: 0, left: 55, width: 45, height: 45},
//						{top: 55, left: 55, width: 45, height: 45}
//					],
               
               //LOTS of squares
//               					pieces: 10,
//					shadowsAnimation: {
//						opacity: 1,
//						translateX: 20,
//						translateY: 20
//					},
//					animation: {
//						duration: 1500,
//						easing: 'easeOutQuad',
//						delay: 50,
//						translateZ: {min: 10, max: 65}
//					},
//					positions: [
//						{top: 0, left: 0, width: 30, height: 30},
//						{top: 10, left: 10, width: 30, height: 30},
//						{top: 20, left: 20, width: 30, height: 30},
//						{top: 30, left: 30, width: 30, height: 30},
//						{top: 40, left: 40, width: 30, height: 30},
//						{top: 50, left: 50, width: 30, height: 30},
//						{top: 60, left: 60, width: 30, height: 30},
//						{top: 70, left: 70, width: 30, height: 30},
//						{top: 80, left: 80, width: 30, height: 30},
//						{top: 90, left: 90, width: 30, height: 30}
//					],
               //Multi Squares
//               					pieces: 9,
//					positions: [
//						{top: 30, left: 5, width: 40, height: 80},
//						{top: 50, left: 25, width: 30, height: 30},
//						{top: 5, left: 75, width: 40, height: 20},
//						{top: 30, left: 45, width: 40, height: 20},
//						{top: 45, left: 15, width: 50, height: 40},
//						{top: 10, left: 40, width: 10, height: 20},
//						{top: 20, left: 50, width: 30, height: 70},
//						{top: 0, left: 10, width: 50, height: 60},
//						{top: 70, left: 40, width: 30, height: 30}
//					],
//					animation: {
//						duration: 2000,
//						easing: 'easeInOutCubic',
//						delay: 0,
//						opacity: 1,
//						translateZ: 85,
//						translateX: {min: -20, max: 20},
//						translateY: {min: -20, max: 20}
//					},
//					parallax: true,
//					parallaxMovement: {min: 5, max: 10},
               
               //Psychadelic
					pieces: 8,
					positions: [
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100},
						{top: 0, left: 0, width: 100, height: 100}
					],
					shadows: false,
					parallax: true,
               	//	parallaxMovement: {min: 20, max: 30},

					parallaxMovement: {min: 10, max: 30},
					animation: {
						duration: 2500,
						easing: 'easeOutExpo',
						delay: 0,
						opacity: .1,
                    	translateZ: {min: 10, max: 25}

					//	translateZ: {min: 10, max: 25}
					},
	                onReady: function() { 
							segmenter.animate();
						 
						 
					}
                
                  
             }); 
            	 			var tiltSettings = [
			{},
			{
				movement: {
					imgWrapper : {
						translation : {x: 10, y: 10, z: 30},
						rotation : {x: 0, y: -10, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					lines : {
						translation : {x: 10, y: 10, z: [0,70]},
						rotation : {x: 0, y: 0, z: -2},
						reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
					},
					caption : {
						rotation : {x: 0, y: 0, z: 2},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					overlay : {
						translation : {x: 10, y: -10, z: 0},
						rotation : {x: 0, y: 0, z: 2},
						reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						rotation : {x: -5, y: 10, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
					},
					caption : {
						translation : {x: 30, y: 30, z: [0,40]},
						rotation : {x: [0,15], y: 0, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: 10, y: 10, z: [0,20]},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						rotation : {x: -5, y: 10, z: 0},
						reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
					},
					caption : {
						translation : {x: 20, y: 20, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					overlay : {
						translation : {x: 5, y: -5, z: 0},
						rotation : {x: 0, y: 0, z: 6},
						reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						translation : {x: 0, y: -8, z: 0},
						rotation : {x: 3, y: 3, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					lines : {
						translation : {x: 15, y: 15, z: [0,15]},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: 0, y: 8, z: 0},
						reverseAnimation : {duration : 600, easing : 'easeOutExpo'}
					},
					caption : {
						translation : {x: 10, y: -15, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					}
				}
			},
			{
				movement: {
					lines : {
						translation : {x: -5, y: 5, z: 0},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					caption : {
						translation : {x: 15, y: 15, z: 0},
						rotation : {x: 0, y: 0, z: 3},
						reverseAnimation : {duration : 1500, easing : 'easeOutElastic', elasticity : 700}
					},
					overlay : {
						translation : {x: 15, y: -15, z: 0},
						reverseAnimation : {duration : 500,easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 500, easing : 'easeOutExpo'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						translation : {x: 5, y: 5, z: 0},
						reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
					},
					caption : {
						translation : {x: 10, y: 10, z: [0,50]},
						reverseAnimation : {duration : 1000, easing : 'easeOutQuart'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
					}
				}
			},
			{
				movement: {
					lines : {
						translation : {x: 40, y: 40, z: 0},
						reverseAnimation : {duration : 1500, easing : 'easeOutElastic'}
					},
					caption : {
						translation : {x: 20, y: 20, z: 0},
						rotation : {x: 0, y: 0, z: -5},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: -30, y: -30, z: 0},
						rotation : {x: 0, y: 0, z: 3},
						reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
					}
				}
			}];

			function init() {
				var idx = 0;
				[].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos) { 
					idx = pos%2 === 0 ? idx+1 : idx;
					new TiltFx(el, tiltSettings[idx-1]);
				});
			}

			// Preload all images.
			imagesLoaded(document.querySelector('main'), function() {
				document.body.classList.remove('loading');
				init();
			});

			// REMOVE THIS!
			// For Demo purposes only. Prevent the click event.
			[].slice.call(document.querySelectorAll('a[href="#"]')).forEach(function(el) {
				el.addEventListener('click', function(ev) { ev.preventDefault(); });
			});

			var pater = document.querySelector('.pater'),
				paterSVG = pater.querySelector('.pater__svg'),
				pathEl = paterSVG.querySelector('path'),
				paths = {default: pathEl.getAttribute('d'), active: paterSVG.getAttribute('data-path-hover')};

			pater.addEventListener('mouseenter', function() {
				anime.remove(pathEl);
				anime({
					targets: pathEl,
					d: paths.active,
					duration: 400,
					easing: 'easeOutQuad'
				});
			});

			pater.addEventListener('mouseleave', function() {
				anime.remove(pathEl);
				anime({
					targets: pathEl,
					d: paths.default,
					duration: 400,
					easing: 'easeOutExpo'
				});
			});
 
});