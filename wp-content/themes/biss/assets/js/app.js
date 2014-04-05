$(document).ready(function() {
      $('#slides').slidesjs({
        width: 1280,
        height: 552,
        navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 400
          }
        },
		callback: {
			loaded: function(){
			  // hide navigation and pagination
			  $('.slidesjs-pagination, .slidesjs-navigation').hide(0); 
			}
		}		
      });
	  
	/*$(".custom-item").click(function(e){
		e.preventDefault();
		$('a[data-slidesjs-item="' + $(this).attr("data-item") + '"]').trigger('click');
	});*/
	
	$('.cus_next').click(function(e) {
		e.preventDefault();
		$('.slidesjs-next').click();
	});
	$('.cus_prev').click(function(e) {
		e.preventDefault();
		$('.slidesjs-previous').click();
	});	

});

$(document).ready(function() {
	$('[data-toggle="tabajax"]').click(function(e) {
    	var $this = $(this),
        loadurl = $this.attr('href'),
        targ = $this.attr('data-target');

    	$.get(loadurl, function(data) {
        	$(targ).html(data);
    	});

    	$this.tab('show');
    	$('#tab_nav a').removeClass('active_tab');
		$(this).addClass('active_tab');
    	return false;
	});
});

$(document).ready(function(){
	var animasi = {scrollTop: $('#tab_nav').offset().top};
	$('#tab_nav a').click(function() {
		$('body,html').animate(animasi, 500);
		return false;
	});
});

$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
		type: 'default',
		width: 'auto',
		fit: true,
		closed: 'accordion',
		activate: function(event) {
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});

$(document).ready(function() {

	$('div.navigation').css({'width' : '300px', 'float' : 'left'});
	$('div.content').css('display', 'block');
	
	var onMouseOutOpacity = 1;
	$('#thumbs ul.thumbs li').opacityrollover({
		mouseOutOpacity:   onMouseOutOpacity,
		mouseOverOpacity:  1.0,
		fadeSpeed:         'fast',
		exemptionSelector: '.selected'
	});
	
	// Initialize Advanced Galleriffic Gallery
	var gallery = $('#thumbs').galleriffic({
		delay:                     2500,
		numThumbs:                 15,
		preloadAhead:              10,
		enableTopPager:            true,
		enableBottomPager:         true,
		maxPagesToShow:            7,
		imageContainerSel:         '#slideshow',
		controlsContainerSel:      '#controls',
		captionContainerSel:       '#caption',
		loadingContainerSel:       '#loading',
		renderSSControls:          true,
		renderNavControls:         true,
		playLinkText:              'Play Slideshow',
		pauseLinkText:             'Pause Slideshow',
		prevLinkText:              '&lsaquo; Previous Photo',
		nextLinkText:              'Next Photo &rsaquo;',
		nextPageLinkText:          'Next &rsaquo;',
		prevPageLinkText:          '&lsaquo; Prev',
		enableHistory:             false,
		autoStart:                 false,
		syncTransitions:           true,
		defaultTransitionDuration: 200,
		onSlideChange:             function(prevIndex, nextIndex) {
			this.find('ul.thumbs').children()
				.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
				.eq(nextIndex).fadeTo('fast', 1.0);
		},
		onPageTransitionOut:       function(callback) {
			this.fadeTo('fast', 0.0, callback);
		},
		onPageTransitionIn:        function() {
			this.fadeTo('fast', 1.0);
		}
	});
});

/* $(document).ready(function(){
	var animasi = {scrollTop: $('#tab_nav').offset().top};
	$('#tab_nav a').click(function() {
		$('body,html').animate(animasi, 500);
		return false;
	});
}); */





