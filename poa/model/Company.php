<?php
require_once "../config/conexion.php";

class Company extends  Conexion{


  public static function addCompany($data){
    $sql = "INSERT INTO t_empresa VALUES (null,?,?,?,?,now())";
    $sql =Conexion::Conectar()->prepare($sql);
    $sql->bindParam(1,$data['empresa'], PDO::PARAM_STR);
    $sql->bindParam(2,$data['giro_negocio'], PDO::PARAM_STR);
    $sql->bindParam(3,$data['email'], PDO::PARAM_STR);
    $sql->bindParam(4,$data['contacto'], PDO::PARAM_STR);
    $response=$sql->execute();
    return $response;
  }

  public static function showCompany(){
    $sql ="SELECT  * FROM t_empresa";
    $sql=Conexion::Conectar()->prepare($sql);
    $sql->execute();
    $response=$sql->fetchAll();


    $tabla='<table id="example"   class="table  table-bordered table-striped"><thead>
<tr>
  <th>Empresa</th>
  <th>Giro de Negocio</th>
  <th>Email</th>
  <th>Contacto</th>
  <th>Fecha de Registro</th>
  <th>Acciones</th>
</tr>
</thead>
<tbody>';
    $data='';
    foreach ($response as $item):
      $data.='<tr>
    <td>'.$item['empresa'].'</td>
    <td>'.$item['giro_negocio'].'</td>
    <td>'.$item['email'].'</td>
    <td>'.$item['contacto'].'</td>
    <td>'.$item['fecha_registro'].'</td>    
    <td >
    
    <a href="oportunidades.php?id='.$item['id_Empresa'].'" class="btn btn-success"   title="Iniciar Foda">
        <i class="fas fa-paper-plane"></i>
      </a>    
      &nbsp;
      <button class="btn btn-info" data-toggle="modal" data-target="#editCompany" title="Editar" onclick="editCompany('.$item['id_Empresa'].')">
        <i class="fas fa-edit" ></i>
      </button>
      &nbsp;
      <button class="btn btn-danger"   title="Eliminar" onclick="deleteCompany('.$item['id_Empresa'].')">
        <i class="fas fa-trash-alt" ></i>
      </button >
    </td >
  </tr>';
    endforeach;
    $fina='</tbody></table>';
    $tabla=$tabla.$data.$fina;

    return  $tabla;
  }

  public static function editCompany($id_Empresa){
    $sql ="SELECT * FROM t_empresa WHERE id_Empresa=?";
    $sql =Conexion::Conectar()->prepare($sql);
    $sql->bindValue(1,$id_Empresa,PDO::PARAM_INT);
    $sql->execute();
    $response = $sql->fetch();
    return $response;
  }

  public static  function updateComapny($data){
    $sql ="UPDATE t_empresa  SET 
            empresa=?,
            giro_negocio=?,
            email=?,
            contacto=?
            WHERE id_Empresa=?";
    $sql =Conexion::Conectar()->prepare($sql);
    $sql->bindParam(1,$data['empresa'], PDO::PARAM_STR);
    $sql->bindParam(2,$data['giro_negocio'], PDO::PARAM_STR);
    $sql->bindParam(3,$data['email'], PDO::PARAM_STR);
    $sql->bindParam(4,$data['contacto'], PDO::PARAM_STR);
    $sql->bindParam(5,$data['id_Empresa'], PDO::PARAM_INT);
    $response =$sql->execute();
    return $response;

  }

  public static  function deleteCompany($id_Empresa){
    $sql ="DELETE FROM t_empresa WHERE id_Empresa=?";
    $sql =Conexion::Conectar()->prepare($sql);
    $sql->bindValue(1,$id_Empresa,PDO::PARAM_INT);
   $response= $sql->execute();

    return $response;
  }
}
?>
