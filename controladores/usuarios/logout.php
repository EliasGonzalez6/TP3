<?php
session_start();

include('../global/conexion.php');

$_SESSION['loginUsuario'] = '';
header('Location: ../../index.php');