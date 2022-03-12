<?php
require '../../conexion.php';

$Id_asesor = $_POST['Id_asesor'];
$Nombre_asesor = $_POST['Nombre_asesor'];
$Ap_paterno_asesor = $_POST['Ap_paterno_asesor'];
$Ap_materno_asesor = $_POST['Ap_materno_asesor'];

$Actualizar_asesor = "CALL actualizar_asesor('$Id_asesor','$Nombre_asesor','$Ap_paterno_asesor','$Ap_materno_asesor')";

if (mysqli_query($conn, $Actualizar_asesor)) {
    require '../Asesores/menu_asesores.php';
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}

?>
