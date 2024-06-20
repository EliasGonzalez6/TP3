<?php
    session_start();

    include('../global/conexion.php');

    $id_delito = $_REQUEST['id_delito'];
    $tipo_delito = $_REQUEST['tipo'];
    $fecha = $_REQUEST['fecha'];
    $uso_arma = $_REQUEST['arma'];
    $Comuna = $_REQUEST['comuna'];
    $Barrio = $_REQUEST['barrio'];

    $query = "UPDATE delito SET `tipo_delito`='$tipo_delito', `fecha`='$fecha', `uso_arma`='$uso_arma', `Comuna`='$Comuna', `Barrio`='$Barrio' where `id_delito`='$id_delito'";             
    $result = ejecutarConsulta($query);        
        
    header('Location: lista.php');
