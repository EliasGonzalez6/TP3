<?php
session_start();

include('../global/conexion.php');

$correo = $_REQUEST['email'];
$clave = $_REQUEST['password'];

$resultado = ejecutarConsulta("SELECT * FROM usuarios where correo = '$correo' ");
$fila = $resultado->fetch_assoc();

if(isset($fila) && !empty($fila)){
    if($clave === $fila['clave']){
        
        //Aqui se crea la variable de sesion para el contador
        $resultado = ejecutarConsulta("SELECT count(*) as cuenta FROM usuarios");
        $fila = $resultado->fetch_assoc();
        $_SESSION['CuentaUsuario'] = $fila['cuenta'];

        //Inicia la sesion
        header('Location: ../../vistas/global/inicio.php');
    }
    else{
        header('Location: ../../index.php');
    }    
}
else{
    header('Location: ../../index.php');
}

