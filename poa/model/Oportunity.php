<?php
require_once "../config/conexion.php";

class Oportunity extends  Conexion{
  public static  function addOportunity($data){
    $ciclo = count($data);


    for ($i=0;$i<$ciclo;$i++){
      $sql ="INSERT INTO t_oportunidades
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
      $response=$sql->execute();
    }
    return $response;
  }
}
?>
