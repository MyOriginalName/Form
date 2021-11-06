$(document).ready(function() {

	$('.submitButton').bind("mouseenter", handleMouseEnter).bind("mouseout", handleMouseOut);
	$('.field').bind("mouseenter", handleMouseEnter).bind("mouseout", handleMouseOut);

	function handleMouseEnter(e) {
		$(this).css( {
			"border": "2px solid black",
			"color": "black",
			"opacity": "0.5"
		});
	};

	function handleMouseOut(e) {
		$(this).css( {
			"border": "2px solid blue",
			"color": "blue",
			"opacity": ""
		});
	};
});