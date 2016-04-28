
$('.navbar-right li ').removeClass('active');
$(".navbar-right a[href='"+window.location.pathname+"']").parent().addClass('active');


$('.profile').click(function(){
   $('.navbar-right li ').removeClass('active');
    $(this).parent().addClass('active');
    if($(this).parent().hasClass('active')){
    $($(this)).parents('#ddUser').toggleClass('active');
  }
    loadProfile();
});




   if($('#meet').parent().hasClass('active')){
      $('#meet').parents('#cono').toggleClass('active');
  }


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

/*  USER  */
$('#UsersBirthDate').attr('type','date');

$('#login').click(function(){
   login();

});

 function login() {

    var email=$('#loginEmail').val();
    var pass=$('#loginPass').val();

     var params={

       email: email,
       password: pass

     };
    $('.principal').html($('.loader').removeAttr('style'));
    var url= window.location.protocol + "//" + window.location.hostname + '/users/checkLogin';
    $.ajax({
        url: url,
        method: 'post',
        data: params,
        success: function(response){
          
          var respObj = eval('('+response+')');
          if(respObj.success) {

            window.location = window.location.protocol + "//" + window.location.hostname;

          }
          else {
           alert("Usuario o contraseña invalida");
          }
          

        }
    });

 }





function saveVehicle(id){
   $('.principal').html($('.loader').removeAttr('style'));
    var url= window.location.protocol + "//" + window.location.hostname + '/users/saveCar';
    $.ajax({
        url: url,
        method: 'post',
        data: {id: id},
        success: function(response){

          var respObj = eval('('+response+')');
          if(respObj.sucess) {

           loadProfile();

          }
          else {
           alert("Error Vuelva a Intentarlo");
          }
         

        }
    });

}

function loadProfile(){
   $('.principal').html($('.loader').removeAttr('style'));
    var url= window.location.protocol + "//" + window.location.hostname + '/users/profile';
    $.ajax({
        url: url,
        method: 'post',
        success: function(response){

          $('.principal').empty();
          $('.principal').html(response);
          $('#selectCar').click(function(){
              var carId=$('#vehiculoUsuario').val();
              saveVehicle(carId);
          });
           $("#makeAppoint").click(function(){
                loadmakeAppoint();
            });
           $("#showAppoint").click(function(){
                loadshowAppoint();
            });
        }
    });


}

 /* load */
 $('.listVehicles').click(function(e){
   
    $(this).parent().addClass('active');


    loadTabs(e);

 });
 function loadTabs(e) {

 // console.log("hola");
   e.preventDefault();
   $('.principal').html($('.loader').removeAttr('style'));
   var url= window.location.protocol + "//" + window.location.hostname + '/vehicles/listVehicles';
    $.ajax({
        url: url,
        method: 'post',
        success: function(response){
        //  $('.principal').empty();
          //$('.principal').html(response);

         window.location.href = $('.listVehicles').attr('href');

        }
    });

 }

  $('#listServices').click(function(e){
   
    $(this).parent().addClass('active');
    var id = $(this).attr('id');

    loadServ(id,e);

 });
 function loadServ(id,e) {

 // console.log("hola");
   e.preventDefault();
   $('.principal').html($('.loader').removeAttr('style'));
   var url= window.location.protocol + "//" + window.location.hostname + '/home/'+id;
    $.ajax({
        url: url,
        method: 'post',
        success: function(response){
        //  $('.principal').empty();
          //$('.principal').html(response);

         window.location.href = $('#listServices').attr('href');

        }
    });

 }



 function loadmakeAppoint() {

  $('.principal').html($('.loader').clone().removeAttr('style'));
   var url= window.location.protocol + "//" + window.location.hostname + '/users/toAppointments';
    $.ajax({
        url: url,
        method: 'post',
        success: function(response){
          $('.principal').empty();
          $('.principal').html(response);
           $('#selectService').click(function(){
              var serviceid = $('#servicioUsuario').val();
              appointment(serviceid);
           });

        }
    });
}

function appointment(serviceid) {
   $('.principal').html($('.loader').removeAttr('style'));
   var url= window.location.protocol + "//" + window.location.hostname + '/appointments/makeAppointments';
    $.ajax({
        url: url,
        data: {id: serviceid},
        method: 'post',
        success: function(response){
          $('.principal').empty();
          $('.principal').html(response);
            $('.backToProfile').click(function(){
                loadProfile();
            });

        }
    });
}

 function loadshowAppoint() {

  $('.principal').html($('.loader').clone().removeAttr('style'));
   var url= window.location.protocol + "//" + window.location.hostname + '/appointments/showAppointments';
    $.ajax({
        url: url,
        method: 'post',
        success: function(response){
          $('.principal').empty();
          $('.principal').html(response);
           $('.backToProfile').click(function(){
                loadProfile();
            });

        }
    });
}