jQuery(document).ready(function($) {
	resizeElement();
});

$(window).scroll(function(event) {
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