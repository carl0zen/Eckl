$(document).ready(function(e){
	$(function(){
	
		$("a.video").click(function() {
				$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'none',
					'overlayColor'	: '#000',
					'title'			: this.title,
					'width'			: 640,
					'height'		: 385,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
					'wmode'				: 'transparent',
					'allowfullscreen'	: 'true'
					}
				});
				return false;
			});
		$('#container .element').each(function(e){
			rp = $(this).find('.rp .val').html();
		
			if (rp < 1200){
				$(this).addClass('width1');
				$(this).addClass('height2');
			}
			else{ 
				if(rp < 1300){
					$(this).addClass('width1');
					$(this).addClass('height3');
				}else{ 
					if(rp < 1700){ 
						$(this).addClass('width2');
						$(this).addClass('height2');
					 }else{
						if(rp < 2000){ 
							$(this).addClass('width2');
							$(this).addClass('height3');
						 }

					}
				}
			}
			var h = $(this).height();
			var w = $(this).width();
		//	$(this).hover(function(e){
			
		//		$(this).stop().animate({width: w * 2, height: h * 2 });
		//		$(this).css({'z-index':1000});
		//	}, function(e){
		//		$(this).stop().animate({width: w,  height: h});
		//		$(this).css({'z-index':1});
		//	});
		});
		// ISotope
		$('#container').isotope({
			itemSelector : '.element',
			sortAscending : false,
		  	masonry :{
				columnWidth:100
			},
			getSortData : {
				rp : function(e){
					return parseInt(e.find('.rp').text());
				},
				date : function(e){
					return parseInt(e.find('.timestamp').text());
				}
			}

		});
		$('.filters a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $('#container').isotope({ filter: selector });
		  return false;
		});
		$('#sort-by a').click(function(){
		  // get href attribute, minus the '#'
		  var sortName = $(this).attr('href').slice(1);
		  $('#container').isotope({ sortBy : sortName });
		  return false;
		});
		
		var $optionSets = $('.option-set'),
		$optionLinks = $optionSets.find('a');
		$optionLinks.click(function(){
		var $this = $(this);
		// don't proceed if already selected
		if ( $this.hasClass('selected') ) {
		return false;
		}
		var $optionSet = $this.parents('.option-set');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');
		// make option object dynamically, i.e. { filter: '.my-filter-class' }
		var options = {},
		key = $optionSet.attr('data-option-key'),
		value = $this.attr('data-option-value');
		// parse 'false' as false boolean
		value = value === 'false' ? false : value;
		options[ key ] = value;
		$('#container').isotope( options );
		return false;
		// On click change the size of the elements
		
	});
	$('#container .element').click(function(){
	        $(this).toggleClass('large');
	        $('#container').isotope('reLayout');
	});	
	
	});
	
	
	
	

	
});