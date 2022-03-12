<?php
require '../../conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container">
  <header>
    <h1>Alumnos</h1>
  </header>
  <div class=" container">

    <div class="container">
      <a class=" btn btn-primary" href="insertar_alumno.php">insertar</a>
      <a class="btn btn-primary" href="eliminar_alumno.php">eliminar</a>
      <a class="btn btn-primary" href="actualizar_alumno.php">actualizar</a>
      <input class="btn btn-secondary" type="submit" name="Menú" onclick="location.href='../menuad.php'" value="Menú">
    </div>
    <div class="container">
      <h2>Lista de alumnos</h2>
      <table class="table table-hover">

        <thead>
          <tr>
            <td>Matricula</td>
            <td>Nombre</td>
            <td>Ap Paterno</td>
            <td>Ap Materno</td>
            <td>Domicilio</td>
            <td>Sexo</td>
            <td>IMSS</td>
            <td>CURP</td>
            <td>Correo</td>
            <td>Grupo</td>
            <td>Cuatrimestre</td>
            <td>Campus</td>
          </tr>
        </thead>
        <?php
        $sql = 'CALL consultar_alumnos()';
        $result = mysqli_query($conn, $sql);
        while ($mostrar = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php echo $mostrar['Matricula']; ?> </td>
          <td><?php echo $mostrar['Nombre_alumno']; ?> </td>
          <td><?php echo $mostrar['Ap_paterno_alumno']; ?> </td>
          <td><?php echo $mostrar['Ap_materno_alumno']; ?> </td>
          <td><?php echo $mostrar['Domicilio']; ?> </td>
          <td><?php echo $mostrar['Sexo']; ?> </td>
          <td><?php echo $mostrar['IMSS']; ?> </td>
          <td><?php echo $mostrar['CURP']; ?> </td>
          <td><?php echo $mostrar['Correo_electronico']; ?> </td>
          <td><?php echo $mostrar['id_grupo_fk']; ?> </td>
          <td><?php echo $mostrar['id_cuatrimestre_fk']; ?> </td>
          <td><?php echo $mostrar['id_campus_fk']; ?> </td>
        </tr>
        <?php }
        ?>
      </table>

    </div>

</body>

</html>