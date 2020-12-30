function generateInput(number){
  var numero = $.trim(number);


  var column="";
  var param=0;
  for(i=1;i<=numero;i++){
    param=0
    column+="<div class='col mt-1 mb-1 '> <label class='text-dark'>Descripcion Perspectiva &nbsp;" + i + "</label> <input type='text' class='form-control' required id='"+ i +"'> </div>";
    param+=i;
  }
  $("#valor").val(param);
  $("#campo").html(column);
}


function data(){
  var perspectiva = $("#perspectiva").val();
  var fila = $("#fila").val();
  var bucle = $("#valor").val();

  var cadena=[];
  var long =0 ;
  var tabla="";
  var numFila=0;
  var table=0;
  var row=0;
  var column=0;
  for(var k=1;k<=bucle;k++){

    cadena[k]=$("#"+k ).val().toUpperCase();
    long++;
  }



  for (var z=1;z<=long;z++){
    tabla +="<div class=\"card-header\"><h3 class=\"card-title\"><i class=\"fas fa-plus-circle\"></i>&nbsp;  <strong>"+cadena[z]+"</strong></h3></div>";
    tabla+="<div class=\"card-body table-responsive \" ><table class=\"table  table-head-fixed text-dark table-boreded mt-3 mb-2\"><thead><tr><th style=\"width:40%;\">Descripción</th><th class=\"text-center\" style=\"width:5%;\">U</th><th class=\"text-center\" style=\"width:5%;\">T</th><th class=\"text-center\" style=\"width:5%;\">I</th><th class=\"text-center\" style=\"width:6%;\">V</th></tr></thead><tbody>";
    for(i=1;i<=fila;i++){
      numFila++;
      tabla+="<tr>"
      for(j=1;j<=5;j++){
        tabla+="<td> <input type='text'  class='form-control text-center' name='campo"+j+"_"+i+"_"+z+"' id='campo"+j+"_"+i+"_"+z+"' required></td>";
        column++;
      }
      tabla+="</tr>";
      //tabla+='</tbody></table></div>';
      row++;
    }
    tabla+="</tbody></table></div><br>";
    table++;
  }
  tabla+="<div class='modal-footer'><button type='submit' class='btn btn-md btn-warning' '><b>Guardar</b></button><a href='amenazas.php' class='btn btn-md btn-warning'><b>Continuar</b></a><input type='hidden' name='table' id='table' value='"+table+"'><input type='hidden' name='row' id='row' value='"+row+"'><input type='hidden' name='column' id='column' value='"+column+"'></div> ";


  $("#tabla").html(tabla);
  $("#tabla1").hide();
  return false;
}

function addOportunity(){
  $.ajax({
    url:'controller/ControllerAddOportunity.php',
    type:'post',
    data: $("#formOportunidadRegistro").serialize(),
    success:function (response) {
      alert(response);
    }

  });


  return false;
}
