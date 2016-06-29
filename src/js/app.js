$(document).foundation();

$(document).ready(function(){
  $('#nav_button').click(function(){
    $('#navigation').toggleClass('active');
  });


  $(document).scroll(function(){
    offset = $('#top').offset();
    if( $(this).scrollTop() > 200 ) {
      if( !$('#js_top').hasClass('show') ){
        $('#js_top').addClass('show');
      }
    }
    else {
      $('#js_top').removeClass('show');
    }
  });

  $('#js_top').click(function () {
   $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
  });
});
