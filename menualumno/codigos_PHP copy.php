<?php
include ("conexion.php");

if (isset($_POST['buscar'])) 
{
  $Matricula = $_POST['Matricula'];
  $valores = array();
  $valores['existe'] = 0;

  $resultados = mysqli_query($conn,"CALL PA_alumno('$Matricula')");
  while ($consulta = mysqli_fetch_array($resultados))
  {
    $valores['existe'] = 1;
    $valores['Nombre_alumno'] = $consulta['Nombre_alumno'];
    $valores['Ap_paterno_alumno'] = $consulta['Ap_paterno_alumno'];
    $valores['Ap_materno_alumno'] = $consulta['Ap_materno_alumno'];
    $valores['Domicilio'] = $consulta['Domicilio'];
    $valores['Sexo'] = $consulta['Sexo'];
    $valores['IMSS'] = $consulta['IMSS'];
    $valores['CURP'] = $consulta['CURP'];
    $valores['Correo_electronico'] = $consulta['Correo_electronico'];
    $valores['Telefono_casa_al'] = $consulta['Telefono_casa_al'];
    $valores['Telefono_celular_al']= $consulta['Telefono_celular_al'];

   }
  sleep(1);
  $valores = json_encode($valores);
  echo $valores;
}