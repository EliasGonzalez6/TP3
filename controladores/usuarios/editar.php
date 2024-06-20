<?php
session_start();

include('../global/conexion.php');

$id_usuario = $_REQUEST['id_usuario'];

$resultado = ejecutarConsulta("SELECT * FROM usuario where id_usuarios = $id_usuario");
$usuario = $resultado->fetch_assoc();
$_SESSION['editarUsuario'] = $usuario;

header('Location: ../../vistas/usuarios/editar.php');
    