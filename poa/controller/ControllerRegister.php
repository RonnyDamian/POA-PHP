<?php
 require_once "../model/Register.php";

 $data = array(

   "nombre"=>$_POST['name'],
   "correo"=>$_POST['email'],
   "clave"=>$_POST['password'],
   "clave2"=>$_POST['password2'],

 );


$data['nombre']=strtoupper($data['nombre']);
if($data['clave']!=$data['clave2']){
    echo 2;
  }else{
    echo Register::addRegister($data);
  }



?>
