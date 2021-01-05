<?php
error_reporting(0);
require_once "../config/conexion.php";

class Oportunity extends  Conexion{
  public static  function addOportunity($data,$tabla,$fila,$columna,$id_Empresa){



    //echo "El valor es: " .$data[1][1][1]["campo1_1_1"];




    $rowFila =$fila/$tabla;
    $column =$columna/$fila;


    $valorTbla=0;
    $valorFila=0;
    $valorColumna=0;
    $data[] =array();
    for ($z=1;$z<=$tabla;$z++){
      for ($i=1;$i<=$rowFila;$i++){
        $sql ="INSERT INTO t_oportunidades
             VALUES(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now())";
        $sql =Conexion::Conectar()->prepare($sql);
        for ($j=1;$j<=$column;$j++){
          $sql->bindValue($j,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(2,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(3,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(4,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(5,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(6,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(7,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(8,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(9,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(10,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(11,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(12,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(13,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(14,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(15,$data[$z][$i][$j]["campo".$j."_".$i."_".$z.""],PDO::PARAM_STR);
          $sql->bindValue(16,$id_Empresa,PDO::PARAM_INT);

          $valorColumna++;
        }
        $response=$sql->execute();
        $valorFila++;
      }

      $valorTbla++;
    }

      /*$sql ="INSERT INTO t_oportunidades
             VALUES(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,now())";
      $sql =Conexion::Conectar()->prepare($sql);
      $sql->bindValue(1,$data['perspectiva1'],PDO::PARAM_STR);
      $sql->bindValue(2,$data['perspectiva2'],PDO::PARAM_STR);
      $sql->bindValue(3,$data['perspectiva3'],PDO::PARAM_STR);
      $sql->bindValue(4,$data['perspectiva4'],PDO::PARAM_STR);
      $sql->bindValue(5,$data['perspectiva5'],PDO::PARAM_STR);
      $sql->bindValue(6,$data['perspectiva6'],PDO::PARAM_STR);
      $sql->bindValue(7,$data['perspectiva7'],PDO::PARAM_STR);
      $sql->bindValue(8,$data['perspectiva8'],PDO::PARAM_STR);
      $sql->bindValue(9,$data['perspectiva9'],PDO::PARAM_STR);
      $sql->bindValue(10,$data['perspectiva10'],PDO::PARAM_STR);
      $sql->bindValue(11,$data['descripcion'],PDO::PARAM_STR);
      $sql->bindValue(12,$data['urgencia'],PDO::PARAM_STR);
      $sql->bindValue(13,$data['tendencia'],PDO::PARAM_STR);
      $sql->bindValue(14,$data['impacto'],PDO::PARAM_STR);
      $sql->bindValue(15,$data['valoracion'],PDO::PARAM_STR);
      $sql->bindValue(16,$data['id_Empresa'],PDO::PARAM_STR);
      */

    return $response;
  }
}
?>
