<?php
require_once "../config/conexion.php";

Class Register extends Conexion{

  public static  function addRegister($data)
      {
        $data['clave'] = md5($data['clave']); //Encriptación de clave

        $sql = "INSERT INTO t_usuarios VALUES (null,?,?,?,now())";
        $sql = Conexion::conectar()->prepare($sql);
        $sql->bindValue(1, $data['nombre'], PDO::PARAM_STR);
        $sql->bindValue(2, $data['correo'], PDO::PARAM_STR);
        $sql->bindValue(3, $data['clave'], PDO::PARAM_STR);
        $response = $sql->execute();
        return $response;

      }
}
?>
