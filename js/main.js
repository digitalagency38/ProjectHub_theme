$(function(){
    function burg(){
      var burgerWr = $('.burger-wrap'),
        burgerBtn = $('.burger-btn'),
        burgerBody = $('.burger-body'),
        burgerCloseBtn = $('.burger-close-btn');
      
      burgerBtn.on('click', function(){
        $(burgerWr).addClass('opened');
      });
      
      burgerCloseBtn.on('click', function(){
        $(burgerWr).removeClass('opened');
      })
    }
    
    burg();
  
    $(document).on('click', function(e){
      if( $(e.target).closest('.burger-btn').length || $(e.target).closest('.burger-body').length)
      return
      
      $('.burger-wrap').removeClass('opened');
    });
  });
  $(window).load(function(){
    $(".main_first__in").mCustomScrollbar({
      scrollButtons:{
        enable:true
    }
  });
  function backPage() {
    window.history.length > 2 ? window.history.back() : document.location.href='/'
  }
  $('.breadcrums__back').on('click', function(){
    backPage();
  });
  $(".js_slider").slick({
    arrows: true,
    slidesToShow: 3,
    infinite: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
          variableWidth: true
        }
      }]
  });
});