<?php
session_start();

include('../global/conexion.php');

$id_delito = $_REQUEST['id_delito'];
ejecutarConsulta("DELETE FROM delito where id_delito = $id_delito");

header('Location: lista.php');
    