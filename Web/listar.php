<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
<body>
        <?php
        include_once './menu.php';
        ?>
        <div align='center'> 
        <h1>Listado de Perros</h1>
        <table class="table table-dark">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Raza</td>
                <td>Edad</td>
                <td>Tamaño</td>
                <td>Operacion</td>
            </tr>
            <?php
                    include_once '../controlador/DaoPerro.php';
                    $dao=new DaoPerro();
                    $reg=$dao->Listar();
                    while ($row = mysqli_fetch_array($reg)){
                        echo '<tr>';
                        echo '<td>'.$row[0]."</td>";
                        echo '<td>'.$row[1]."</td>";
                        echo '<td>'.$row[2]."</td>";
                        echo '<td>'.$row[3]."</td>";
                        echo '<td>'.$row[4]."</td>";
                        echo '<td><a class="btn btn-default btn-sm" href="eliminar.php?id='.$row[0].'" ><span class="glyphicon glyphicon-trash"></span> Eliminar </a></td>';
                        echo '<td><a class="btn btn-default btn-sm" href="modificar.php?id='.$row[0].'"><span class="glyphicon glyphicon-refresh"></span> Modificar </a></td>';
                        echo '</tr>';
                    }
            ?>
        </table>
        </div>
    </body>
</html>
