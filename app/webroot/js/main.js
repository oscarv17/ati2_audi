// /* Carousel size img*/
var $item = $('.carousel .item');
 // var $wHeight = $(window).height();

 // $item.height($wHeight); 
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

// $(window).on('resize', function (){
  // $wHeight = $(window).height();
  //   $item.height($wHeight);
  //   });

/*  Login  */
$('#UsersBirthDate').attr('type','date');

$('#sendRegistration').click(function(){
  console.log("hola");
   registrar();

});

 function registrar() {

    var url= window.location.protocol + "//" + window.location.hostname + '/users/registrar';
    $.ajax({
        url: url,
        method: 'post',
        success: function(response){
            $('.container-login').empty();
            $('.container-login').html(response);

        }
    });

 }