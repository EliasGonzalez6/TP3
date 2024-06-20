<?php
session_start();

include('../global/conexion.php');

$dias = array(1 => "lunes",2 => "martes",3 => "miércoles",4 => "jueves",5 => "viernes",6 => "sábado",7 => "domingo");
$meses = array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$resultado = ejecutarConsulta("SELECT * FROM delito");
$listaDelitos = array();
while($row = $resultado->fetch_assoc()){
    
    $result = ejecutarConsulta("SELECT * FROM usuario where id_usuarios = ".$row['oficial']);
    $usuario = $result->fetch_assoc();
    $row['oficialNombre'] = $usuario['nombre'];    
        
    $fecha = $row['fecha'];
    $numero_mes = date('n', strtotime($fecha));
    $row['nombre_mes'] = $meses[$numero_mes];

    $numero_dia = date('N', strtotime($fecha));
    $row['nombre_dia'] = $dias[$numero_dia];

    $row['hora'] = date('H:i', strtotime($fecha));

    array_push($listaDelitos,$row);
}
$_SESSION['listaDelitos'] = $listaDelitos;

header('Location: ../../vistas/delitos/lista.php');



    