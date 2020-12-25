<?php
require_once "../model/Company.php";

$id_Empresa =isset($_POST['id_Empresa'])? $_POST['id_Empresa']:'';
echo json_encode(Company::deleteCompany($id_Empresa));

?>
