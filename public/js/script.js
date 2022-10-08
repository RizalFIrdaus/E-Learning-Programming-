AOS.init();
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

$(document).ready(function(){
  linkScroll = $('.scroll');
  linkScroll.click(function(e){
      e.preventDefault();
      $('body, html').animate({
         scrollTop: $(this.hash).offset().top-200
      }, 700);
   });

   $(ducument).on('click','.pagination a',function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
   })

   function fetch_data(page){
       $.ajax({
           url : "/pagination/fetch_data?page="+page,
           succes:function(data){
                $('.materi').html(data);
           }
       })
   }
});
