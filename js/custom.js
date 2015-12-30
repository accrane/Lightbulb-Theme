$(window).load(function () {

		
		
// if the mouse hover the image
		$('.thumbstyle').hover(
			function() {
				//display heading and caption
				$(this).children('.thumbnail-info').animate({"opacity":".8"}, 'fast');
			},

			function() {
				//hide heading and caption
				$(this).children('.thumbnail-info').animate({"opacity":"0.0"},'fast');
			}
		);		
		
		
// initialize Isotope
var $container = $('#container').isotope({
  // options
  itemSelector: '.item',
  masonry: {
	columnWidth: 145,
	//columnWidth: $container.width() / 2,
			}
});
// layout Isotope again after all images have loaded
$container.imagesLoaded( function() {
  $container.isotope('layout');
});


/*//Isotope with images loaded ...
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});
*/


		
		
		
		
		// transition effect
		style = 'easeOutQuart';

		
		
		
		
		
	$(".lightbox").colorbox();
	
	
	
	$('#my-work').hover(
			function() {
				//display heading and caption
				$(this).animate({marginTop:-10},{duration:200, easing: style});
				$(this).find("img").effect('bounce', {times: 2 }, 'slow');
			},

			function() {
				//hide heading and caption
				$(this).animate({marginTop:0},{duration:200, easing: style});
			}
		);
		
		
			$('#my-hobbies').hover(
			function() {
				//display heading and caption
				$(this).animate({marginTop:-10},{duration:200, easing: style});
				$(this).find("img").effect('bounce', {times: 2 }, 'slow');
			},

			function() {
				//hide heading and caption
				$(this).animate({marginTop:0},{duration:200, easing: style});
			}
		);
		
		
			$('#my-blog').hover(
			function() {
				//display heading and caption
				$(this).animate({marginTop:-10},{duration:200, easing: style});
				$(this).find("img").effect('bounce', {times: 2 }, 'slow');
			},

			function() {
				//hide heading and caption
				$(this).animate({marginTop:0},{duration:200, easing: style});
			}
		);
		
		
			$('#my-me-cont').hover(
			function() {
				//display heading and caption
				$(this).children('#my-me').stop(false,true).animate({marginLeft:-250},{duration:200, easing: style});
				$(this).find("img").effect('bounce', {times: 2 }, 'slow');
			},

			function() {
				//hide heading and caption
				$(this).children('#my-me').stop(false,true).animate({marginLeft:0},{duration:200, easing: style});
			}
		);
		
		
		
		
		
		
		
			$('.page-logo').hover(
			function() {
				//display heading and caption
				$(this).children('.explode').stop(false,true).animate({height:600, paddingTop:150},{duration:200, easing: style});
			},

			function() {
				//hide heading and caption
				$(this).children('.explode').stop(false,true).animate({height:150, paddingTop:0},{duration:200, easing: style});
			}
		);
		
		
		
		
		
		
		
		
		
		
		
		$('.snips').mouseenter(function() {
			$(this).animate({paddingLeft: '5px', backgroundColor: "#C6C6C6"});
			});
		$('.snips').mouseleave(function() {
			$(this).animate({paddingLeft: '0px', backgroundColor: "#AEAEAE"});
			});
			
			
			$('.categories li').mouseenter(function() {
			$(this).animate({paddingLeft: '5px'});
			});
		$('.categories li').mouseleave(function() {
			$(this).animate({paddingLeft: '0px'});
			});
			
	
	
	
	/*
$(".snips").hover(
   function() {
      $(this).animate({  backgroundColor: "#B0DAF5", padding: '10px' }, 300);
   },
   function() {
      $(this).animate({  backgroundColor: "#AEAEAE", padding: '0px;' }, 500);
   }
);*/

	

		
		
		
});