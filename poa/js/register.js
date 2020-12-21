$('#formRegister').submit(function(e){
  e.preventDefault();
  var nombre = $.trim($("#name").val());
  var email = $.trim($("#email").val());
  var password =$.trim($("#password").val());
  var password2 =$.trim($("#password2").val());

  if(nombre.length == "" || email == "" || password == "" || password2 == ""){
    toastr.options = {
      "closeButton":true,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr["info"]("Por favor, debe llenar todos los campos", "CAMPOS INCOMPLETOS")
    return false;
  }else{
    $.ajax({
      url:"../controller/ControllerRegister.php",
      type:"POST",
      datatype: "json",
      data: $("#formRegister").serialize(),
      success:function(response){
        if(response==1){
          $("#formRegister")[0].reset();
          toastr.options = {
            "closeButton":true,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
          toastr["success"]("El usuario fue registrado exitosamente", "REGISTRO EXITOSO")
        } else if(response==2){
          toastr.options = {
            "closeButton":true,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
          toastr["info"]("Las contraseñas ingresadas no coinciden", "DATOS INCONSISTENTES")
        }
      }
    });
  }
});
