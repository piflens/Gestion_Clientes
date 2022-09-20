<!doctype html>
<html lang="en">

<head>
    <title>Modificar Cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=StyleSheet href="css/modificar.css" type="text/css">
    <link rel=StyleSheet href="css/header.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-ico/Sura.ico" />
</head>
<header class="header">
    <?php
    include 'cabecera.php'
    ?>
</header>

<body>
    <?php
    include_once "database.php";
    $id = $_GET['id_cli'];
    //consulta que carga todos los datos de un alumno en especifico
    $sql = "SELECT * FROM clientes WHERE id_cli ='" . $id . "'";
    $query = mysqli_query($conn, $sql);

    //devuelve el array
    $fila = mysqli_fetch_assoc($query)
    ?>
    <main>
        <div class="container mb-5 mt-5 col-xs-12 col-md-6 col-lg-6">
            <img class="card-img-top" src="images/Sura.png" alt="Card image cap" />
            <div class="card color ">
                <h3 class="mb-4 mr-2 ml-2 mt-2"> Modificar Datos Personales</h3>
                <form method="request" action='controller/modificarClientes.php'>
                    <input type="hidden" name="id" id="id" value="<?php echo $fila['id_cli']  ?>">
                    <div class="form-row mt-2 mb-2 mr-2 ml-2 justify-content-center">
                        <div class="form-group col-xs-12 col-md-12 col-lg-12 ">
                            <label>Ingrese Cliente:</label>
                            <input required="" type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nom_cli']  ?>">
                        </div>
                        <div class="form-group col-xs-12 col-md-12 col-lg-12 ">
                            <label>Ingrese Apellido:</label>
                            <input required="" type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $fila['ape_cli']  ?>">
                        </div>
                        <div class="form-group col-xs-12 col-md-12 col-lg-12 ">
                            <label>Ingrese Rut:</label>
                            <input required="" type="text" class="form-control" id="rut" name="rut" value="<?php echo $fila['rut']  ?>">
                        </div>
                        <div class="form-group col-xs-12 col-md-12 col-lg-12 ">
                            <label>Ingrese Seguro:</label>
                            <select required id="seguro" name="seguro" class="form-control">
                                <option disabled selected value="">
                                    Seguro Accidentes
                                </option>
                                <option>Seguros Hogar</option>
                                <option>Seguros Automovil</option>
                            </select>
                        </div>
                        <div class="form-group col-xs-12 col-md-12 col-lg-12 ">
                            <label>Ingrese Edad:</label>
                            <input required="" type="text" class="form-control" id="edad" name="edad" value="<?php echo $fila['edad']  ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" id="modificar" class="btn btn-light mb-3 " onclick="return ConfirmacionModificar
                                    ()">Modificar
                                Cliente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--llamamos mensaje de confirmacion-->
    <script src="js/mensaje.js"> </script>
</body>

</html>