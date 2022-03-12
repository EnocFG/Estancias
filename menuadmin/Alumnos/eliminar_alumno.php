<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Eliminando Alumno</title>
</head>

<body>
  <header>
    <h1>eliminando alumno</h1>
  </header>
  <form action="validar_eliminar.php" method="POST">
    <label for="">Ingrese matricula: <input type="text" name="Matricula" id=""></label>
    <input class="btn btn-danger" type="submit" value="Eliminar">
  </form>
  <input class="btn btn-secondary" type="submit" name="Menú" onclick="location.href='../Alumnos/menu_alumnos.php'"
    value="Menú">
</body>

</html>