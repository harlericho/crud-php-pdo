<?php

require_once '../datos/crud.php';
$id = $_POST['id'];
echo json_encode(Crud::__obtenerDatos($id));


