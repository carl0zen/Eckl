$(document).ready(function(e){
	//Display Youtube Videos with Fancybox
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
	//Changes the size of the elements depending on the Reaction Points
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
	});
	// ISotope
	//Initialization 
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
	
	//On click the object becomes large
	$('#container .element').click(function(){
	        $(this).toggleClass('large');
	        $('#container').isotope('reLayout');
	});
	
	// Filtering function
	$(function(){
		$('#sort-by .popularity').click(function(){
			$('#sort-direction .descending').html('Most Popular');
			$('#sort-direction .ascending').html('Least Popular');
		});
		$('#sort-by .dateadded').click(function(){
			$('#sort-direction .descending').html('Newest');
			$('#sort-direction .ascending').html('Oldest');
		});
		$('.filters a').click(function(){
			$(this).parent().parent().find('.selected').removeClass('selected');
			$(this).parent().addClass('selected');
		  	var selector = $(this).attr('data-filter');
		  	$('#container').isotope({ filter: selector });
		  	return false;
		});
		$('#sort-by a').click(function(){
			$(this).parent().parent().find('.selected').removeClass('selected');
			$(this).parent().addClass('selected');
		  	var sortName = $(this).attr('href').slice(1);
		  	$('#container').isotope({ sortBy : sortName });
		  	return false;
		});
	});
	//Sort Ascending- Descending Function
	$(function(){	
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
		
	
	});
	
	
	
	

	
});