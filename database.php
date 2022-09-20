<?php
//conexion sencilla para poder ejecutar funciones mysqli
$server = "localhost";
$usuario = "root";
$pass = "";
$bd = "secure";
$conn2 = new mysqli($server, $usuario, $pass, $bd);
$conn = new mysqli($server, $usuario, $pass, $bd);
