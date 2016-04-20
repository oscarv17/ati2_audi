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

$('#login').click(function(){
  console.log("hola");
   login();

});

 function login() {

    var email=$('#loginEmail').val();
    var pass=$('#loginPass').val();

     var params={

       email: email,
       password: pass

     };

    var url= window.location.protocol + "//" + window.location.hostname + '/users/checkLogin';
    $.ajax({
        url: url,
        method: 'post',
        data: params,
        success: function(response){
          
          var respObj = eval('('+response+')');
          if(respObj.sucess) {

            window.location = window.location.protocol + "//" + window.location.hostname;

          }
          else {
           alert("Usuario o contraseña invalida");
          }
          

        }
    });

 }