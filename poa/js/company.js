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


function editCompany (id_Empresa){
  $.ajax({
    url:'controller/ControllerEditCompany.php',
    type:'post',
    data:{id_Empresa:id_Empresa},
    success:function (response) {
      response =JSON.parse(response);
      $("#empresau").val(response['empresa']);
      $("#gNegociou").val(response['giro_negocio']);
      $("#emailu").val(response['email']);
      $("#contactou").val(response['contacto']);
      $("#id_Empresa").val(response['id_Empresa']);

    }
  });
}

function updateCompany(){
  $.ajax({
    url:'controller/ControllerUpdateCompany.php',
    type:'post',
    data:$('#formCompanyu').serialize(),
    success:function (response) {
      if (response){
        $("#formCompanyu")[0].reset();
        $("#editCompany").modal('hide');
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
        toastr["success"]("La compañia fue actualizada exitosamente", "REGISTRO ACTUALIZADO")
      }else if(response==2){

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
        toastr["error"]("¡Oops! Error de actualización", "REGISTRO NO ACTUALIZADO")
      }


    }
  });
  return false;
}

function deleteCompany(id_Empresa) {

Swal.fire({
  title: 'Confirmación de borrado',
  text: "¿Está seguro de querer eliminar este registro?. ¡Una vez eliminado ya no podra recuperlo!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#28a745',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminelo',
}).then((result) => {
  if (result) {
    $.ajax({
        url:'controller/ControllerDeleteCompany.php',
        type:'post',
        data:{id_Empresa:id_Empresa},
        success:function (response) {
          if(response){
            load();
            Swal.fire(
              '¡Borrado!',
              'Registro eliminado',
              'success'
            )
          }else{
            Swal.fire(
              '¡Borrado!',
              'Registro eliminado',
              'danger'
            )
          }
          }
      });

  }
})

}


