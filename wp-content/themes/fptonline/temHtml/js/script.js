$('.panel-heading').click(
    function(){
      
      if($(this).next().css('display') == 'none'){
        $('.panel-collapse').slideUp();
        $(this).next().stop(true,true).slideDown();
        $('.panel').removeClass('active');
        $(this).parent().addClass('active');
        
      }
      else{
          $(this).parent().find('.panel-collapse').slideUp();
          $('.panel').removeClass('active');
      }
    }
 )

$('.navbar-toggle').click(
    function(){
      $('.navbar-wrap').toggleClass('show');        
    }
 )
$(function(){
 var topbanner = $("#owl_slide_topbanner.owl-carousel").owlCarousel({
            items: 1,
			loop:true,
            margin:0,
            autoplay:true,
            animateOut: 'fadeOut',
            autoplaySpeed: 5000,
            autoplayTimeout:3000,
            autoplayHoverPause:true		
		  });
});
$(document).ready(function(){
 jQuery(function(a){
 var b=a(".navbar-wrap"),
 c=b.offset().top,d=a(window);
 d.bind("scroll resize",function(){
  var a=d.scrollTop();
  a>c&&!b.is(".sticky")?b.removeClass("no-sticky").addClass("sticky"):a<=c&&b.is(".sticky")&&b.removeClass("sticky").addClass("no-sticky")})});
});