<?php

require_once '../datos/crud.php';

$user=$_POST['usuario'];
$datos = array(
    'usuario' => $_POST['usuario'],
    'password' => $_POST['pass'],
);
if(Crud::__validarIngresoDatos($user)){
    echo "2";
}else{
    echo Crud::__agregarDatos($datos);
}

