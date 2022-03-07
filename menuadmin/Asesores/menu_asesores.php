<?php 
$conexion = mysqli_connect('localhost','root','','estancias');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesores Academicos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Asesores Academicos</h1></header>
    <div class="container">
        <label for="">Buscar<input type="search" name="Buscar" id=""></label>
    </div>
    <div class="container">
        <button><a href="insertar_asesor.php">insertar</a></button>
        <button><a href="eliminar_asesor.php">eliminar</a></button>
        <button><a href="actualizar_asesor.php">actualizar</a></button>
    </div class="container">
    <div class="container">
        <table>Datos de los Asesores
            <tr>
                <td>ID asesor</td>
                <td>Nombre</td>
                <td>Ap Paterno</td>
                <td>Ap Materno</td>
            </tr>
            <?php
            $sql="CALL consultar_asesores";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['Id_asesor'] ?></td>
                <td><?php echo $mostrar['Nombre_asesor'] ?></td>
                <td><?php echo $mostrar['Ap_paterno_asesor'] ?></td>
                <td><?php echo $mostrar['Ap_materno_asesor'] ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
    <input type="submit" name="Menú" onclick="location.href='../menuad.php'" value="Menú">
</body>
</html>