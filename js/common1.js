$(function(){
	$(window).resize(infinite);
	function infinite() {
		var htmlWidth = $('html').width();
		if (htmlWidth >= 960) {
			$("html").css({
				"font-size" : "28px"
			});
		} else {
			$("html").css({
				"font-size" :  28 / 960 * htmlWidth + "px"
			});
		}
	}infinite();
});