var $ = jQuery.noConflict();

$(document).ready(function () {
      $('.parallax').parallax();
});

$('.collapsible li').click(function() {
	$('.click-here-container').hide();
})