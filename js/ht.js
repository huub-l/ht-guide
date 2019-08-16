// Start Wrapper
jQuery(document).ready( function($) {

	// Attachments Toggle
	$('.hkb-article-attachments__title').click(function () {
		$(this).parent('.hkb-article-attachments').toggleClass('hkb-article-attachments--active');
	});

	// Offset article anchor
	if($(window).width() > 767){
		$('.hkb-article__content h2,.hkb-article__content h3').each(function(){
			$(this).before( "<div id='" + $(this).attr("id") + "' class='article-anchor'></div>" );
			$(this).removeAttr("id");
		});
	}

	// Mobile Hamburger toggle
	$('#ht-navtoggle').click(function(){
		if($(this).hasClass("active")){
			$('.dimmer').css('display','none');
		}else{
			$('.dimmer').css('display','block');
		}

	});
	// Close Mobile Nav when clicking away
	$('.dimmer').click(function(){
		$('.dimmer').css('display','none');
		$('#ht-navtoggle').removeClass("active");
	});

	// Add link to article images
	$('.hkb-article__content img').each(function(){
		// var img_src = $(this).attr("src");
		// $(this).wrap("<a href='"+ img_src +"'></a>");
	});


	// Add target attribute to SKU ad links
	$('.sku-ad a').attr('target','_blank');

// End Wrapper
} );


// Sticky secondary header
if($(window).width() > 767){
	$(window).scroll(function (event) {

			var scroll = $(window).scrollTop();
			if(scroll >= 100){
				// Secondary secondary header -> Sticky
				$('body.single .ht-pageheader').css({
					"position" : "fixed",
					"z-index" : "99999"
				});

				// Article sidebar -> move down
				$('body.single .sidebar--sticky').css({
					"top" : "135px"
				});

				// Article top padding
				$('body.single .ht-page').css({
					"padding-top" : "160px"
				});
			}else{
				// Secondary secondary header -> unstick
				$('body.single .ht-pageheader').css({
					"position" : "relative",
					"z-index" : "1"
				});

				// Article sidebar -> move back up
				$('body.single .sidebar--sticky').css({
					"top" : "0"
				});

				// Article top padding
				$('body.single .ht-page').css({
					"padding-top" : "60px"
				});
			}


	});

} else{


}
