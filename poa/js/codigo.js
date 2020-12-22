$('#formLogin').submit(function(e){
   e.preventDefault();
   var correo = $.trim($("#email").val());
   var clave =$.trim($("#password").val());

   if(correo.length == "" || clave == ""){
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
           url:"controller/ControllerLogin.php",
           type:"POST",
           data: $('#formLogin').serialize(),
           success:function(success){

               if(success == 2){
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
                 toastr["danger"]("Error de Autenticación ", "Usuario y/o password incorrecta")
               }else if(success == 1){
                 setTimeout("location.href='home.php'", 1500);
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
                 toastr["success"]("En breve el sistema lo direcionara a la página principal", "CONEXIÓN EXITOSA")
               }else if(success == 3){
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
                 toastr["error"]("El usuario ingresado no existe en los registros", "ACCESO NO AUTORIZADO")
               }
           }    
        });
    }     
});
