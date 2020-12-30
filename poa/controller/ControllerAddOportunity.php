<?php
require_once "../model/Oportunity.php";

$tabla =$_POST['table'];
$fila =$_POST['row'];
$columna =$_POST['column'];

$rowFila =$fila/$tabla;
$column =$columna/$fila;

$valorTbla=0;
$valorFila=0;
$valorColumna=0;
$data[] =array();
for ($z=1;$z<=$tabla;$z++){
  for ($i=1;$i<=$rowFila;$i++){

    for ($j=1;$j<=$column;$j++){
      $data[$z][$i][$j]= array("campo".$j."_".$i."_".$z.""=>$_POST["campo".$j."_".$i."_".$z.""]);
      $valorColumna++;
    }
    $valorFila++;
  }
  $valorTbla++;
}

/*echo "El numero de tablas es: " . $tabla ." el número de filas es: " . $fila. " y el número de columnas es: " . $columna;
echo "El valor del bucle tablas es: " . $valorTbla ." el valor del bucle filas es: " . $valorFila. " y el valor del bucle columnas es: " . $valorColumna;
die();*/

/*$data = array(
  "tabla"=>,
  "fila"=>$_POST['row'],
  "columna"=>$_POST['column']
);*/
print_r($data);
die();

echo Oportunity::addOportunity($data);

?>
