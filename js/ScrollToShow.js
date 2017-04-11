var sectionsList = new Array(10);

function ScrollToShow(){
}

ScrollToShow.start = function(argument){
   collectSectionPosition();
   hideAllScrollToShow();
   $(window).scroll(function(event) {
      checkScrollToShow();
   });
   $(document).ready(function(event) {
      checkScrollToShow();
   });
};

function hideAllScrollToShow(callback){
   $('*[anim^="anim"]').each(function(index, el) {
      $(this).css('opacity', 0);
   });
   if(callback != null){
      callback();
   }
}

function showSection(section){
   $('#'+section+' *[anim^="anim"]').each(function(index, el) {
      var attr = ($(this).attr('anim'))+"";
      var time = attr.split("-")[1];
      var func = $(this).attr('animFunc');
      animateSelector($(this),func,time);
   });
}

function collectSectionPosition(){
   $("div.section").each(function(index, el) {
      //var heightToShow = $(this).attr("heightToShow");
      var heightToShow = $(this).offset().top;
      sectionsList[$(this).attr("id")] = heightToShow;
      console.log($(this).attr("id")+" , "+heightToShow);
   });
}

function checkScrollToShow(){
   var scrollTop = $(this).scrollTop() + $(this).height() / 2;
   for(var element in sectionsList){
      if(scrollTop >= sectionsList[element]){
         showSection(element);
      }
   }
}

function checkScrollToShow(){
   var scrollTop = $(this).scrollTop() + $(this).height() / 2;
   for(var element in sectionsList){
      if(scrollTop >= sectionsList[element]){
         showSection(element);
      }
   }
}

function animateSelector(selector,func,time){
   $(selector).css({
      'animation-delay': time+'s',
      '-webkit-animation-delay:': time+'s'
   });
   $(selector).addClass(func);
}