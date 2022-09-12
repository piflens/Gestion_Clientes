<!doctype html>
<html lang="en">

<head>
    <title>Mostrar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
    <link rel=StyleSheet href="css/header.css" type="text/css">
    <link rel=StyleSheet href="css/mostrar.css" type="text/css">
</head>

<body>
    <header class="header">
        <?php
        include 'cabecera.php'
        ?>
    </header>
    <main>
        <div class="container mb-5 mt-5">
            <form method="post">
                <div class="card table-responsive ">
                    <table class="table table-striped table-hover" id="example">
                        <thead class="sura">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">cliente</th>
                                <th scope="col">rut</th>
                                <th scope="col">seguros</th>
                                <th scope="col">edad</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'controller/mostrarClientes.php'
                            ?>
                        </tbody>
                    </table>

                </div>
            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Datatable-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<!--JS datatable-->
<script src="js/datatable.js"> </script>
<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>

<script src="js/mensaje.js"> </script>
</body>

</html>