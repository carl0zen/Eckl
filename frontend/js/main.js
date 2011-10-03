// JavaScript Document
var current_gallery_page=0;
var mouse_is_inside=true;
var PetalActualNo=0
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 20;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	return randomstring;
}

function load_html( target, url){
	var content;
	$(target).append("<div id='loader'><img src='/ecologikal/images/ajax-loader.gif'> Cargando...</div>");
	$.get(url, function(data){
		$(target).html("");
		$(target).html(data);
		$(target).slideDown(600);
	});
}

function updateTips( t, type ) {
	tips = $( ".validateTips" );
	if(type){
		tips.removeClass( "ui-state-error" );
		tips.addClass( "ui-state-highlight" );
		t='<span style="position:absolute;margin-top:5px;" class="ui-icon ui-icon-alert"></span>'+t;
	}else{
		tips.removeClass( "ui-state-highlight" );
		tips.addClass( "ui-state-error" );
		t='<span style="position:absolute;margin-top:5px;" class="ui-icon ui-icon-info"></span>'+t;
	}
	tips.html( t ).fadeIn(100);setTimeout(function() {tips.fadeOut(1500 );	}, 2000 );
}

function checkLength( o, m, min, max ) {
	if ( o.val().length > max || o.val().length < min ) {
		o.addClass( "ui-state-error" );
//		updateTips( "Length of " + n + " must be between " + min + " and " + max + ".",0 );
		updateTips( m,0 );
		return false;
	} else {
		return true;
	}
}

function checkRegexp( o, regexp, n ) {
	if ( !( regexp.test( o.val() ) ) ) {
		o.addClass( "ui-state-error" );
		updateTips( n,0);
		return false;
	} else {
		return true;
	}
}
//jQuery(document).ready(function(){
//	$('#closebutton').click(function(e){
//		$(this).parent().parent().slideUp(400);
//	});
//	$('#accordion .head').click(function() {
//			$(this).next().toggle();
//			return false;
//		}).next().hide();
//});

