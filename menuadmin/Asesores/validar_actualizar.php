<?php 
require('conexion.php');

$Id_asesor = $_GET['Id_asesor'];
$Nombre_asesor = $_GET['Nombre_asesor'];
$Ap_paterno_asesor = $_GET['Ap_paterno_asesor'];
$Ap_materno_asesor = $_GET['Ap_materno_asesor'];

$Actualizar_asesor="CALL actualizar_ase('$Id_asesor','$Nombre_asesor','$Ap_paterno_asesor','$Ap_materno_asesor')";

if (mysqli_query($conn,$Actualizar_asesor)) {
    require("../Asesores/menu_asesores.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>