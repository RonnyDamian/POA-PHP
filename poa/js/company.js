$(document).ready(load());
function load(){
  $.ajax({
    url:"controller/ControllerShowCompany.php",
    type:"post",
    success:function (response) {
      $("#tbCompany").html(response);
    }
  });
}

function addCompany(){
  $.ajax({
    url:"controller/ControllerAddCompany.php",
    type:"post",
    data:$("#formAdd").serialize(),
    success:function (response) {
      if(response==1){
        $("#formAdd")[0].reset();
        $("#addCompany").modal('hide');
        load();
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
        toastr["success"]("La compañia fue registrada exitosamente", "REGISTRO EXITOSO")
      }
    }
  });
  return false;
}

