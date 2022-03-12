<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menú Alumno</title>
  <link rel="stylesheet" href="css/menustyle.css" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="window-notice" id="window-notice">
    <div class="content">
      <div class="content-text">
        <span>Elige el apartado</span><br />
        <br />
        <input type="submit" class="solicitud" value="Solicitud de Estancias/Estadias">
        <input type="submit" class="exoneracion" value="Carta de exoneración">
        <input type="submit" class="Aceptacion" value="Carta de aceptación">
        <input type="submit" class="Satisfaccion" value="Encuesta de satisfacción">
        <input type="submit" class="Reporte" value="Reporte de estancias">
        <input type="submit" class="Terminacion" value="Carta de terminación">
      </div>

      <div class="content-buttons">
        <br />
        <input type="submit" class="sesion" onclick="location.href='../login.html'" value="Cerrar Sesión">
      </div>
    </div>
  </div>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/soliAlert.js"></script>
  <script src="js/exoAlert.js"></script>
  <script src="#"></script>
  <script src="#"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>


</body>

</html>