$(document).ready(function(e){
			
			// INTERACTION
			// This will handle all the animations and interaction
			// CENTER MODALBOX
			var thickbox = $('#modalbox');
			var height = $(window).height();
			var width = $(document).width();
		    thickbox.css({
		        'left' : width/2.5 - (thickbox.width() / 2),  // half width - half element width
		    });
			$('#overlay').css('height', height);
			$('#overlay').click(function(e){
				$(this).fadeOut(100);
				$('div#modalbox').fadeOut(100);
			});
			$('#close').click(function(e){
				$('div#modalbox').fadeOut(100);
				$('#overlay').fadeOut(100);
			});
			
			//TOOLBAR ICONS
			$('.tiptip').tipTip();
			$('div.icon#account').click(function(e){
				$('div.#accountlist').toggle();
			});
<<<<<<< HEAD
<<<<<<< HEAD
=======
		$('.bwWrapper').BlackAndWhite();
=======
//		$('.bwWrapper').BlackAndWhite();
		
		/*::PLUGINS::
		JQuery Fancybox
		 This is basic - uses default settings */

			$("a#single_image").fancybox();

			/* Using custom settings */

			$("a#inline").fancybox({
				'hideOnContentClick': true
			});

			/* Apply fancybox to multiple items */

			$("a").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
				'overlayShow'	:	false
			});
		
>>>>>>> MacBook Pro Deprecated Update
			
	/**			
			$('videoimage').hover(function(e){
		
				$('index :not(videoimage)').animate({ 'opacity': 0.3},200);
			}, function(e){
				$('overlay').fadeOut(200);
				$('index :not(videoimage)').animate({ 'opacity': 1},200);
			});
			$('kinimage').hover(function(e){
				$('index :not(kinimage img)').animate({ 'opacity': 0.1},200);
			}, function(e){
				$('index :not(kinimage img)').animate({ 'opacity': 1},200);
			});
			
			$('mapimage').hover(function(e){
				$('index :not(mapimage)').animate({ 'opacity': 0.3},200);
			}, function(e){
				$('index :not(mapimage)').animate({ 'opacity': 1},200);
			});  **/
>>>>>>> blackandwhite
});