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
  var cadena =[];
  var tabla ="";
  var l=0;
for(k=0;k<=bucle;k++){
  cadena[k]=$("#"+bucle).val().toUpperCase();
}
alert(cadena[1]);
  for(i=1;i<=fila;i++){
    tabla+="<tr>"

    for(j=1;j<=6;j++){
      tabla+="<td > <input type='text' value='Valores de prueba mamahuevos' class='form-control'></td>";
    }
    tabla+=  "</tr>";
  }
  $("#tabla").html(tabla);
  $("#tabla1").hide();
  return false;
}
