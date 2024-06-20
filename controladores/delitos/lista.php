<?php
session_start();

include('../global/conexion.php');

$resultado = ejecutarConsulta("SELECT * FROM delito");
$listaDelitos = array();
while($row = $resultado->fetch_assoc()){
    array_push($listaDelitos,$row);
}
$_SESSION['listaDelitos'] = $listaDelitos;

header('Location: ../../vistas/delitos/lista.php');
    