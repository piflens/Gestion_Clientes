  
  <?php
    include_once 'database.php';

    try {
        $sql2 = "SELECT * FROM clientes
         WHERE edad >= 49";
        $query2 = mysqli_query($conn2, $sql2);

        while ($filas = mysqli_fetch_assoc($query2)) {
            echo '<tr>';
            echo '<td nowrap>' . $filas['id_cli'] . '</td>';
            echo '<td nowrap>' . $filas['nom_cli'] . ' ' . $filas['ape_cli'] . '</td>';
            echo '<td nowrap>' . $filas['rut'] . '</td>';
            echo '<td nowrap>' . $filas['seguro'] . '</td>';
            echo '<td nowrap>' . $filas['edad'] . '</td>';
            echo '<td nowrap> <a href="modificar.php?id_cli=' . $filas['id_cli'] . '" role="button"><i class="fas fa-user-edit"></i></a>' . ' ' . '<a href="controller/delete.php?id_cli=' . $filas['id_cli'] . '" role="button" onclick="return ConfirmacionEliminacion()"><i class="fas fa-user-slash"></i></a></td>';
            echo '</tr>';
        }
    } catch (Exception $e) {

        die("Error" . $e->GetMessage());
    } finally {

        $conn2 = null;
    }
