<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solicitud de Estancia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

<div class="container">
    <div class="cargando row">
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>
    </div>

    <form class="formulario">
        <h1 class="encabezado">DATOS PERSONALES</h1>
        <input type="text" id="Matricula" name="Matricula" placeholder="matricula" class="input" onblur="buscar_datos();"><br>
        <input type="text" id="Nombre_alumno" name="Nombre_alumno" placeholder="nombre" class="input" required><br>
        <input type="text" id="Ap_paterno_alumno" name="Ap_paterno_alumno" placeholder="apellido paterno" class="input" required><br>
        <input type="text" id="Ap_materno_alumno" name="Ap_materno_alumno" placeholder="apellido materno" class="input" required><br>
        <input type="text" id="Domicilio" name="Domicilio" placeholder="domicilio" class="input" required><br>
        <input type="text" id="Sexo" name="Sexo" placeholder="sexo" class="input" required><br>
        <input type="text" id="IMSS" name="IMSS" placeholder="num. imss" class="input" required><br>
        <input type="text" id="CURP" name="CURP" placeholder="curp" class="input" required><br>
        <input type="email" id="Correo_electronico" name="Correo_electronico" placeholder="&#64 correo electronico" class="input" required><br>

        <input type="tel" id="Telefono_casa_al" name="Telefono_casa_al" placeholder="&#9743 telefono" class="input" onblur="buscar_telefono();"><br>
        <input type="tel" id="Telefono_celular_al" name="Telefono_celular_al" placeholder="&#9743 telefono movil" class="input" required><br>
        <input type="text" id="asesor" name="asesor" placeholder="asesor academico" class="input" required><br></br>
        <br>

        <input type="button" id="enviar" name="Enviar" value="Siguiente">
        <input type="submit" name="Menu" onclick="location.href='menualum.php'" value="Menú">
        <input type="button" value="Cancelar" onclick="limpiar();">
        <p class="warning" id="warning" ></p>
    </form>
</div>
</body>
</html>
<script type="text/javascript">
        $(document).ready(function(){
        $('.cargando').hide(); //ocultar
      });
    function buscar_datos()
    {

        Matricula = $("#Matricula").val();

    var parametros =
        {
        "buscar": "1",
        "Matricula" : Matricula

        };
    $.ajax(
    {
      data:  parametros,
      dataType: 'json',
      url:   'codigos_PHP.php',
      type:  'post',
      beforeSend: function()
      {
          $('.formulario').hide();
          $('.cargando').show();

        },
      error: function()
      {
          alert("Error");
      },
      complete: function()
      {
        $('.formulario').show();
        $('.cargando').hide();
        },
      success:  function (valores)
      {
        $("#Nombre_alumno").val(valores.Nombre_alumno);
        $("#Ap_paterno_alumno").val(valores.Ap_paterno_alumno);
        $("#Ap_materno_alumno").val(valores.Ap_materno_alumno);
        $("#Domicilio").val(valores.Domicilio);
        $("#Sexo").val(valores.Sexo);
        $("#IMSS").val(valores.IMSS);
        $("#CURP").val(valores.CURP);
        $("#Correo_electronico").val(valores.Correo_electronico);             
      }
    })
    }
  </script>
