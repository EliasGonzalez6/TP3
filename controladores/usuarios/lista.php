<?php
session_start();

include('../global/conexion.php');

$resultado = ejecutarConsulta("SELECT * FROM usuario");
$listaUsuarios = array();
while($row = $resultado->fetch_assoc()){
    array_push($listaUsuarios,$row);
}
$_SESSION['listaUsuarios'] = $listaUsuarios;

header('Location: ../../vistas/usuarios/lista.php');
    