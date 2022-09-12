<?php
include_once "../database.php";
//obtencion de datos y asignacion de variables
$nom_cli = $_REQUEST['nombre'];
$ape_cli = $_REQUEST['apellido'];
$rut = $_REQUEST['rut'];
$seguro = $_REQUEST['seguro'];
$edad = $_REQUEST['edad'];

//consulta de INSERT
$consulta = "INSERT INTO clientes (nom_cli, ape_cli, rut, seguro, edad)
VALUES ('$nom_cli', '$ape_cli','$rut','$seguro','$edad')";


if ($conn->query($consulta) === TRUE) {
    echo "<script type=\"text/javascript\">alert('Registro exitoso');window.location='../index.php'; </script>";
} else {
    echo "<script type=\"text/javascript\">alert('Registro fallido');window.location='../index.php'; </script>";
}
$conn->close();
