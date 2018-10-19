/*Smooth Scroll:*/

$("a[href^='#scroll']").click(function(e) {
	e.preventDefault();
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});