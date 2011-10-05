$(document).ready(function(e){
	$('#bw').BlackAndWhite();
	$('div.square').hover(function(e){
		$(this).find('.squareinfo').show().animate({'margin-left':'-10px'});
		$('div.square').not(this).stop().animate({opacity: 3});
	},function(e){
		$(this).find('.squareinfo').show().animate({'margin-left':'-95px'});
		$('div.square').not(this).stop().animate({opacity: 1});
	});

});