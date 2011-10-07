$(document).ready(function(e){
	$('#search_btn').click(function(e){
		$('input#search').slideDown(100).focus();
	});
	$('input#search').focusout(function(e){
		$(this).slideUp(100);
	});
});	