jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  });
});
$(document).ready(function() {
  $().UItoTop({ easingType: 'easeOutQuart' });
});
$(function () {
  $("#slider").responsiveSlides({
    auto: true,
    pager:false,
    nav: true,
    speed: 1000,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });
});
$("document").ready(function() {
  $("#video").simplePlayer();
});
jQuery(document).ready(function( $ ) {
  $('.counter').counterUp({
    delay: 100,
    time: 1000
  });
});
$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});
