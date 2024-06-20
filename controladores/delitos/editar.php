<?php
session_start();

include('../global/conexion.php');

$id_delito = $_REQUEST['id_delito'];

$resultado = ejecutarConsulta("SELECT * FROM delito where id_delito = $id_delito");
$delito = $resultado->fetch_assoc();
$_SESSION['editarDelito'] = $delito;

header('Location: ../../vistas/delitos/editar.php');
    