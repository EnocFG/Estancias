<?php

require('../../conexion.php');

$Id_asesor = $_POST['Id_asesor'];
$Nombre_asesor = $_POST['Nombre_asesor'];
$Ap_paterno_asesor = $_POST['Ap_paterno_asesor'];
$Ap_materno_asesor = $_POST['Ap_materno_asesor'];

$PA_ins_as = "CALL insertar_asesor('$Id_asesor','$Nombre_asesor',
'$Ap_paterno_asesor','$Ap_materno_asesor')";

if (mysqli_query($conn,$PA_ins_as)) {
    
    require("../Asesores/insertar_asesor.php");

}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    require("../Asesores/menu_asesores.php");
}

?>