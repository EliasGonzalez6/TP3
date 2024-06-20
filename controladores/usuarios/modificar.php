<?php
    session_start();

    include('../global/conexion.php');

    $id_usuario = $_REQUEST['id_usuario'];
    $nombre = $_REQUEST['nombre'];
    $dni = $_REQUEST['dni'];
    $email = $_REQUEST['email'];
    $rango = $_REQUEST['rango'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];

    if($password === $confirmPassword){
        $query = "UPDATE usuario SET `nombre`='$nombre', `dni`='$dni', `email`='$email', `rango`='$rango', `clave`='$password' where `id_usuarios`='$id_usuario'";             
        $result = ejecutarConsulta($query);        
             
        header('Location: lista.php');
    }
    else{
        $resultado = ejecutarConsulta("SELECT * FROM usuario where id_usuarios = $id_usuario");
        $usuario = $resultado->fetch_assoc();
        $_SESSION['editarUsuario'] = $usuario;

        header('Location: ../../vistas/usuarios/editar.php');
    }