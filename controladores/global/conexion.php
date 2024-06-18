<?php

    function conexionDB(){
        $conexion = new mysqli("127.0.0.1", "root", "", "delitos", 3306);    
        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        }        
        echo $conexion->host_info . "\n";
        return $conexion;
    }

    function ejecutarConsulta($consulta){
        $conexion = conexionDB();
        $resultado = $conexion->query($consulta);        
        return $resultado;
    }

?>