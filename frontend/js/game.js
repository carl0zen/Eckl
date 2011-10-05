$(document).ready(function(e){
	
	$('div.square').hover(function(e){
		$(this).find('.squareinfo').show().animate({'margin-left':'-10px'});
	},function(e){
		$(this).find('.squareinfo').show().animate({'margin-left':'-95px'});
	});

});