<?php
 require_once 'conexion.php';
 
 class Crud extends Conexion {

     static function __mostrarDatos() {
        $sql="select * from info";
        $query= Conexion::__conectarBD()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    static function __agregarDatos($datos) {
        $sql="insert into info (usuario,password)values(:usuario,:password)";
        $query= Conexion::__conectarBD()->prepare($sql);
        $query->bindParam(":usuario",$datos['usuario'],PDO::PARAM_STR);
        $query->bindParam(":password",sha1($datos['password']),PDO::PARAM_STR);
        return $query->execute();
    }

    static function __validarIngresoDatos($user){
        $sql="select * from info where usuario=:usuario";
        $query=Conexion::__conectarBD()->prepare($sql);
        $query->bindParam(":usuario",$user,PDO::PARAM_STR);
        $query->execute();
        return $query->fetch();
    }
    
    static function __obtenerDatos($id) {
        $sql="select * from info where id=:id";
        $query= Conexion::__conectarBD()->prepare($sql);
        $query->bindParam(":id",$id,PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }
    
    static function __actualizarDatos($datos) {
        $sql="update info set usuario=:usuario,password=:password where id=:id";
        $query= Conexion::__conectarBD()->prepare($sql);
        $query->bindParam(":usuario",$datos['usuario'],PDO::PARAM_STR);
        $query->bindParam(":password",$datos['password'],PDO::PARAM_STR);
        $query->bindParam(":id",$datos['id'],PDO::PARAM_INT);
        return $query->execute();
    }
    static function __eliminarDatos($id) {
        $sql="delete from info where id=:id";
        $query= Conexion::__conectarBD()->prepare($sql);
        $query->bindParam(":id",$id,PDO::PARAM_INT);
        return $query->execute();
    }
}