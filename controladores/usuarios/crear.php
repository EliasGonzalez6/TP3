<?php
    session_start();

    include('../global/conexion.php');

    $nombre = $_REQUEST['nombre'];
    $dni = $_REQUEST['dni'];
    $email = $_REQUEST['email'];
    $rango = $_REQUEST['rango'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];

    if($password === $confirmPassword){
        $query = "INSERT INTO usuario (`nombre`, `dni`, `email`, `clave`, `rango`) VALUES ('$nombre','$dni','$email','$password','$rango')";        
        $result = ejecutarConsulta($query);        

        $resultado = ejecutarConsulta("SELECT count(*) as cuenta FROM usuario");
        $fila = $resultado->fetch_assoc();
        $_SESSION['CuentaUsuario'] = $fila['cuenta'];
        $fila = $resultado->fetch_assoc();

        header('Location: ../../vistas/global/inicio.php');
    }
    else{
        header('Location: crearUsuario.php');
    }