<?php
include_once "../database.php";

$id_cli = $_GET['id_cli'];

$sql = "delete from clientes where id_cli ='" . $id_cli . "'";
$query = mysqli_query($conn, $sql);
header('location:../mostrar.php');
