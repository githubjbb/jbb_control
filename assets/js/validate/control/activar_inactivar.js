$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      return true;
    }
  });

  $(".btn-danger").click(function(){
    var oID = $(this).attr("id");
    //Activa icono guardando
    $('.btn-danger').attr('disabled','-1');
    $("#div_error").css("display", "none");
    $("#div_load").css("display", "inline");
    $.ajax({
      type: "POST", 
      url: base_url + "control/activar_catalogo", 
      data: {'idCatalogo': oID},
      dataType: "json",
      contentType: "application/x-www-form-urlencoded;charset=UTF-8",
      cache: false,
      success: function(data){
        if( data.result == "error" )
        {
          $("#div_load").css("display", "none");
          $("#div_error").css("display", "inline");
          $("#span_msj").html(data.mensaje);
          $('.btn-danger').removeAttr('disabled');             
          return false;
        } 
        if( data.result )
        {                                                         
          $("#div_load").css("display", "none");
          $('.btn-danger').removeAttr('disabled');
          var url = base_url + "control/catalogo";
          $(location).attr("href", url);
        }
        else
        {
          alert('Error. Reload the web page.');
          $("#div_load").css("display", "none");
          $("#div_error").css("display", "inline");
          $('.btn-danger').removeAttr('disabled');
        } 
      },
      error: function(result) {
        alert('Error. Reload the web page.');
        $("#div_load").css("display", "none");
        $("#div_error").css("display", "inline");
        $('.btn-danger').removeAttr('disabled');
      }
    });
  });

  $(".btn-primary").click(function(){
    var oID = $(this).attr("id");
    //Activa icono guardando
    $('.btn-primary').attr('disabled','-1');
    $("#div_error").css("display", "none");
    $("#div_load").css("display", "inline");
    $.ajax({
      type: "POST",
      url: base_url + "control/inactivar_catalogo", 
      data: {'idCatalogo': oID},
      dataType: "json",
      contentType: "application/x-www-form-urlencoded;charset=UTF-8",
      cache: false,
      success: function(data){
        if( data.result == "error" )
        {
          $("#div_load").css("display", "none");
          $("#div_error").css("display", "inline");
          $("#span_msj").html(data.mensaje);
          $('.btn-primary').removeAttr('disabled');             
          return false;
        } 
        if( data.result )
        {                                                         
          $("#div_load").css("display", "none");
          $('.btn-primary').removeAttr('disabled');
          var url = base_url + "control/catalogo";
          $(location).attr("href", url);
        }
        else
        {
          alert('Error. Reload the web page.');
          $("#div_load").css("display", "none");
          $("#div_error").css("display", "inline");
          $('.btn-primary').removeAttr('disabled');
        } 
      },
      error: function(result) {
        alert('Error. Reload the web page.');
        $("#div_load").css("display", "none");
        $("#div_error").css("display", "inline");
        $('.btn-primary').removeAttr('disabled');
      }
    });
  });
});