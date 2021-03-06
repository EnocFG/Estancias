<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Menú Administrador</title>

</head>

<body>
  <div class=" window-notice" id="window-notice">
    <div class="content">
      <div class="content-text">
        <span>Elige el apartado</span><br />
        <br />
        <input type="submit" class="Alumnos" onclick="location.href='../menuadmin/Alumnos/menu_alumnos.php'"
          value="Alumnos">
        <input type="submit" name="Docentes" onclick="location.href='../menuadmin/Asesores/menu_asesores.php'"
          value="Docentes">
        <input type="submit" name="Empresas" onclick="location.href='../menuadmin/Empresas/menu_empresas.php'"
          value="Empresas">
      </div>

      <div class="content-buttons">
        <br />
        <input type="submit" name="sesion" onclick="location.href='../login.html'" value="Cerrar Sesión">
      </div>
    </div>
  </div>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/modal.js"></script>

</body>

</html>