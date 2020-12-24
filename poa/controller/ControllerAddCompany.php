<?php

require_once "../model/Company.php";

$data = array(
  "empresa"=>$_POST['empresa'],
  "giro_negocio"=>$_POST['gNegocio'],
  "email"=>$_POST['email'],
  "contacto"=>$_POST['contacto']
);

echo Company::addCompany($data);

?>
