<?php
require_once '../datos/crud.php';
$datos = array(
    'usuario' => $_POST['usuariou'],
    'password' => $_POST['passu'],
    'id' => $_POST['id'],
);
echo Crud::__actualizarDatos($datos);