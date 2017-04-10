jQuery(document).ready(function($) {
	resizeElement();
	$(".adv-left-info").mouseover(function(event) {
		adv_left_mouseOver(this);
	});
	$(".adv-left-info").mouseout(function(event) {
		adv_left_mouseOut(this);
	});
	$(".adv-left-info").click(function(event) {
		adv_left_select(this);
	});
	adv_interval();
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

/*Advise script begin*/
var adv_current_index = 2;
var adv_interval_obj = null;
function adv_interval(){
	adv_left_select(".adv-left-info:nth-child(2)");
	adv_interval_obj = setInterval(function(){
		adv_current_index++;
		if(adv_current_index == 4){
			adv_current_index = 1;
		}
		adv_left_select(".adv-left-info:nth-child("+adv_current_index+")");
	}, 3000);
}
function adv_left_mouseOver(selector){
	$(selector).children('.adv-name').children('span').addClass('adv-name-text-hover');
	$(selector).children('.adv-avt').children('.adv-img').children('img').addClass('img-hover');
	$(selector).children('.adv-avt').children('.adv-dot').addClass('dot-hover');
}
function adv_left_mouseOut(selector){
	$(selector).children('.adv-name').children('span').removeClass('adv-name-text-hover');
	$(selector).children('.adv-avt').children('.adv-img').children('img').removeClass('img-hover');
	$(selector).children('.adv-avt').children('.adv-dot').removeClass('dot-hover');
}
function adv_left_select(selector){
	$(".adv-left-info").each(function(index, el) {
		$(this).children('.adv-name').children('span').removeClass('adv-name-text-selected');
		$(this).children('.adv-avt').children('.adv-img').children('img').removeClass('img-selected');
		$(this).children('.adv-avt').children('.adv-dot').removeClass('dot-selected');
	});
	$(selector).children('.adv-name').children('span').addClass('adv-name-text-selected');
	$(selector).children('.adv-avt').children('.adv-img').children('img').addClass('img-selected');
	$(selector).children('.adv-avt').children('.adv-dot').addClass('dot-selected');
}
/*Advise script end*/