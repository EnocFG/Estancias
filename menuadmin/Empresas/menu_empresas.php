<?php
require 'conexion.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
</head>
<body>
    <header><h1>Empresas</h1></header>
    <div class="container">
        datos de empresas
    </div>
    <div>
        <label for="">buscar</label>
        <input type="search" name="" id="">
    </div>
    <div class="container">
        <button><a href="insertar_empresa.php">agregar</a></button>
        <button><a href="actualizar_empresa.php">actualizar</a></button>
        <button><a href="eliminar_empresa.php">eliminar</a></button>
    </div>

    <div class="container">
        <table>Datos de las Empresas
            <tr>
                <td>ID Empresa</td>
                <td>Nombre</td>
                <td>Domicilio</td>
                <td>Telefono</td>
                <td>Correo Electronico</td>
            </tr>
            <?php
            $sql="CALL consultar_empresa()";
            $result=mysqli_query($conn,$sql);
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['id_empresa'] ?></td>
                <td><?php echo $mostrar['Nombre_empresa'] ?></td>
                <td><?php echo $mostrar['Domicilio_empresa'] ?></td>
                <td><?php echo $mostrar['Telefono_empresa'] ?></td>
                <td><?php echo $mostrar['Correo_electronico'] ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>

    <input type="submit" name="Menú" onclick="location.href='../menuad.php'" value="Menú">
</body>
</html>
