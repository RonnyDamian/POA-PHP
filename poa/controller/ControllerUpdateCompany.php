<?php
require_once "../model/Company.php";
$data = array(
  "empresa"=>$_POST['empresau'],
  "giro_negocio"=>$_POST['gNegociou'],
  "email"=>$_POST['emailu'],
  "contacto"=>$_POST['contactou'],
  "id_Empresa"=>$_POST['id_Empresa']
);
$data['empresa'] =strtoupper($data['empresa']);
$data['giro_negocio'] =strtoupper($data['giro_negocio']);
$data['email'] =strtoupper($data['email']);

echo Company::updateComapny($data);
?>
