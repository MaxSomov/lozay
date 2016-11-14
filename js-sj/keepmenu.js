jQuery(window).on("load", function() {
	if(jQuery("#yt_menuwrap")){
		offset_top = jQuery(" #yt_menuwrap").offset().top
		jQuery(window).scroll(function(){
			processScroll("#yt_menuwrap", "top-fixed", offset_top);
		});
	}
});

function processScroll(element, eclass, offset_top, column, offset_end) {
	var scrollTop = jQuery(window).scrollTop();
	if(jQuery(element).height()< jQuery(window).height()){
		if (scrollTop >= offset_top) {
			jQuery(element).addClass(eclass);
		} else if (scrollTop <= offset_top) {
			jQuery(element).removeClass(eclass);
		}
		
	}
}

