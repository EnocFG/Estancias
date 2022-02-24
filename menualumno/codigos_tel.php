<?php
require ("conexion.php");
if (isset($_POST['buscar'])) 
{
  $Matricula = $_POST['Matricula'];
  $valores = array();
  $valores['existe'] = 0;

  $resultados = mysqli_query($conn,"SELECT * FROM telefono_alumno WHERE Matricula_fk ='$Matricula' ");
  while($consulta = mysqli_fetch_array($resultados))
  {
   $valores['existe'] = 1;
   $valores['Tel_casa_al'] = $consulta['Tel_casa_al'];
   $valores['Tel_celular_al'] = $consulta['Tel_celular_al'];
  }
  sleep(1);
  $valores = json_encode($valores);
  echo $valores;
}