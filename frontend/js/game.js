$(document).ready(function(e){
	$('div.square').click(function(e){
		$(this).animate({
			width : '216px',
			height : '216px'
		});
		$('div.square').not(this).animate({
			width : '107px',
			height : '107px'
		});
		
		
	})
});