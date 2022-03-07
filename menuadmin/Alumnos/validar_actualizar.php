<?php

include('../../conexion.php');

$Matricula = $_GET['Matricula'];
$Nombre_alumno = $_GET['Nombre_alumno'];
$Ap_paterno_alumno = $_GET['Ap_paterno_alumno'];
$Ap_materno_alumno = $_GET['Ap_materno_alumno'];
$Domicilio = $_GET['Domicilio'];
$Sexo = $_GET['Sexo'];
$IMSS = $_GET['IMSS'];
$CURP = $_GET['CURP'];
$Correo_electronico = $_GET['Correo_electronico'];
$id_grupo_fk = $_GET['id_grupo_fk'];
$id_cuatrimestre_fk = $_GET['id_cuatrimestre_fk'];
$id_campus_fk = $_GET['id_campus_fk'];

$Actualizar = "CALL actualizar_alumno('$Matricula','$Nombre_alumno','$Ap_paterno_alumno','$Ap_materno_alumno','$Domicilio','$Sexo','$IMSS','$CURP','$Correo_electronico','$id_grupo_fk','$id_cuatrimestre_fk','$id_campus_fk')";

if (mysqli_query($conn,$Actualizar)) {
   require("../Alumnos/menu_alumnos.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>