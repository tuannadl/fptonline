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
