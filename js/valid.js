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
 
 
});