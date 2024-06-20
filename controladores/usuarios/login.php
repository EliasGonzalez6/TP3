<?php
session_start();

include('../global/conexion.php');

$correo = $_REQUEST['email'];
$clave = $_REQUEST['password'];

$resultado = ejecutarConsulta("SELECT * FROM usuario where email = '$correo' ");
$fila = $resultado->fetch_assoc();

if(isset($fila) && !empty($fila)){
    if($clave === $fila['clave']){
        
        $_SESSION['loginUsuario'] = $fila;

        //Aqui se crea la variable de sesion para el contador
        $resultado = ejecutarConsulta("SELECT count(*) as cuenta FROM usuario");
        $fila = $resultado->fetch_assoc();
        $_SESSION['cuentaUsuario'] = $fila['cuenta'];

        $resultado = ejecutarConsulta("SELECT count(*) as cuenta FROM delito");
        $fila = $resultado->fetch_assoc();
        $_SESSION['cuentaDelito'] = $fila['cuenta'];

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

