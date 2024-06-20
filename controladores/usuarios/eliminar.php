<?php
session_start();

include('../global/conexion.php');

$id_usuario = $_REQUEST['id_usuario'];
ejecutarConsulta("DELETE FROM usuario where id_usuarios = $id_usuario");

header('Location: lista.php');
    