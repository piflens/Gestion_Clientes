<?php
include_once "../database.php";
//obtencion de variables
$id = $_GET['id'];
$nom = $_GET['nombre'];
$apell = $_GET['apellido'];
$rut = $_GET['rut'];
$seguro = $_GET['seguro'];
$edad = $_GET['edad'];

//consulta si los datos no estan vacios
if ($nom != null || $apell != null || $rut != null || $seguro != null || $edad != null) {
    //consulta sql que realiza un update de los datos de los clientes
    $sql2 = "update clientes set nom_cli='" . $nom . "', ape_cli='" . $apell . "', rut='" . $rut . "', seguro='" . $seguro . "', edad='" . $edad . "' where id_cli='" . $id . "'";
    mysqli_query($conn, $sql2);
    if ($nom = 1) {
        header('location:../mostrar.php');
    }
} else {
}
