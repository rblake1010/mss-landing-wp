$( document ).ready(function() {

	var button = $('.btn-next');
var formWidget = $('.form-widget');
var formSlider = $('.form-slider');
var tl = new TimelineMax();


$(".main").onepage_scroll({
        sectionContainer: "section",
       //easing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)",
        loop: true,
        responsiveFallback: false, 
        beforeMove: function(index){
        TweenMax.to(button, 0.2,{y:20, opacity: 0, ease:Power2.easeOut})
        },
        afterMove: function(index) {
          TweenMax.fromTo(button, 0.5,{y:20, opacity:0},{y:0, opacity: 1, ease:Back.easeIn});
           nextButton();
           widget();
        }
        
 });

tl.set(formSlider, {"visibility":"hidden"})
tl.set(formWidget, {"visibility":"hidden"})

function widget(){
  if($('body').hasClass('viewing-page-2')){
    tl.set(formSlider, {"visibility":"hidden"});
    tl.set(formWidget, {"visibility":"visible"});
    tl.add('start');
    tl.fromTo(formWidget, 0.5, {x:230}, {x:0, delay:1.5, ease:Power2.easeOut})
    
    
  }
}




nextButton();
function nextButton(){
  $('.next').removeClass();
  $('.onepage-pagination li').find('.active').parent().next().addClass("next");
}

$('.next a').click(function(){
      
 });

$('.btn-next').click(function(){
   $(".next a").trigger("click");
});

});
