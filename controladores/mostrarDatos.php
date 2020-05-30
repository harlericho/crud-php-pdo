<?php

require_once '../datos/crud.php';
$obj = new Crud();
$datos = $obj->__mostrarDatos();
$tabla = '<table class="table table-dark">
            <thead>
            <tr class="font-weight-bold">
                 <td>Usuario</td>
                 <td>Contraseña</td>
                 <td>Fecha</td>
                 <td>Acciones</td>
            </tr>
        </thead>
        <tbody>';
$datostabla = "";
foreach ($datos as $key => $value) {
    $datostabla = $datostabla . '<tr>
                               <td>'.$value['usuario'].'</td>
                               <td>'.$value['password'].'</td>
                               <td>'.$value['fecha'].'</td>
                               <td>
                               <button type="button" class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#exampleModal1"
                                    onclick="obtenerDatos('.$value['id'].')">
                                   <i class="fa fa-check"></i>
                               </button>
                               <button type="button" class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id'].')">
                                   <i class="fa fa-trash"></i>
                               </button>
                               </td>
                                 </tr>';
}
echo $tabla.$datostabla.' </tbody></table>';
?>