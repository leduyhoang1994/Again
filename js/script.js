jQuery(document).ready(function($) {
	resizeElement();
});

function resizeElement(){
	$('.slider').height($('.slider').width() * (9/16));
	// while($('.slider').width() > $(window).width()){
	// 	$('.slider').height($('.slider').height()-10);
	// 	$('.slider').width($('.slider').height() * (16/9));
	// 	$('.slider').css('margin-left',$('.slider').width()/2);
	// }
}
jQuery(window).resize(function(event) {
	resizeElement();
});