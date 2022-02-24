<?php
require 'conexion.php';

$id_empresa = $_POST['id_empresa'];
$Nombre_empresa = $_POST['Nombre_empresa'];
$Domicilio_empresa = $_POST['Domicilio_empresa'];
$Telefono_empresa = $_POST['Telefono_empresa'];
$Correo_electronico = $_POST['Correo_electronico'];

$procedimiento = "CALL insertar_empresa('$id_empresa','$Nombre_empresa',
    '$Domicilio_empresa','$Telefono_empresa','$Correo_electronico')";

if (mysqli_query($conn, $procedimiento)) {
    require("../Empresas/menu_empresas.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



