<?php

require_once "../model/Company.php";

$data = array(
  "empresa"=>$_POST['empresa'],
  "giro_negocio"=>$_POST['gNegocio'],
  "email"=>$_POST['email'],
  "contacto"=>$_POST['contacto']
);
$data['empresa'] =strtoupper($data['empresa']);
$data['giro_negocio'] =strtoupper($data['giro_negocio']);
$data['email'] =strtoupper($data['email']);
echo Company::addCompany($data);

?>
