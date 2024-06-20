<?php
    session_start();

    include('../global/conexion.php');

    $tipo_delito = $_REQUEST['tipo'];
    $fecha = $_REQUEST['fecha'];
    $uso_arma = $_REQUEST['arma'];
    $oficial = $_REQUEST['id_usuario'];
    $comuna = $_REQUEST['comuna'];
    $barrio = $_REQUEST['barrio'];

    $query = "INSERT INTO delito (`tipo_delito`, `fecha`, `uso_arma`, `oficial`, `comuna`, `barrio`) VALUES ('$tipo_delito','$fecha','$uso_arma','$oficial','$comuna', '$barrio')";        
    $result = ejecutarConsulta($query);        

    $resultado = ejecutarConsulta("SELECT count(*) as cuenta FROM delito");
    $fila = $resultado->fetch_assoc();
    $_SESSION['cuentaDelito'] = $fila['cuenta'];        

    header('Location: ../../vistas/global/inicio.php');
    