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
});