<?php


require_once '../datos/crud.php';
$id = $_POST['id'];
echo Crud::__eliminarDatos($id);
