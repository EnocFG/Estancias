<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando alumno</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<form class="formulario" action="validar_insertar.php" method="POST">
    <h1 class="encabezado">DATOS ALUMNO</h1>
        <input type="text" id="Matricula" name="Matricula" placeholder="matricula" class="input" onblur="buscar_datos();"><br>
        <input type="text" id="Nombre_alumno" name="Nombre_alumno" placeholder="nombre" class="input" required><br>
        <input type="text" id="Ap_paterno_alumno" name="Ap_paterno_alumno" placeholder="apellido paterno" class="input" required><br>
        <input type="text" id="Ap_materno_alumno" name="Ap_materno_alumno" placeholder="apellido materno" class="input" required><br>
        <input type="text" id="Domicilio" name="Domicilio" placeholder="domicilio" class="input" required><br>
        <input type="text" id="Sexo" name="Sexo" placeholder="sexo" class="input" required><br>
        <input type="text" id="IMSS" name="IMSS" placeholder="num. imss" class="input" required><br>
        <input type="text" id="CURP" name="CURP" placeholder="curp" class="input" required><br>
        <input type="email" id="Correo_electronico" name="Correo_electronico" placeholder="&#64 correo electronico" class="input" required><br>
        <input type="text" id="id_grupo_fk" name="id_grupo_fk" placeholder="id_grupo" class="input" required><br>        
        <input type="text" id="id_cuatrimestre_fk" name="id_cuatrimestre_fk" placeholder="id_cuatrimestre" class="input" required><br>
        <input type="text" id="id_campus_fk" name="id_campus_fk" placeholder="id_campus" class="input" required><br>
        <br>
        <input type="submit" id="enviar" name="Enviar" value="Insertar">
        <input type="submit" id="enviar" name="Enviar" value="Cancelar" onclick="limpiar();">
</form>
</div>
        <input type="submit" name="Menú" onclick="location.href='../Alumnos/menu_alumnos.php'" value="Menú">
</body>
</html>
<script type="text/javascript">
      $(document).ready(function(){
        $('.cargando').hide(); //ocultar
      });  
    function buscar_datos(){
        
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
      url:   'codigos_php.php',
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
        $("#id_grupo_fk").val(valores.id_grupo_fk);
        $("#id_cuatrimestre_fk").val(valores.id_cuatrimestre_fk);
        $("#id_campus_fk").val(valores.id_campus_fk);   
      }
    })
    }
  function limpiar()
  {
        $("#Matricula").val("");    
        $("#Nombre_alumno").val("");
        $("#Ap_paterno_alumno").val("");
        $("#Ap_materno_alumno").val("");
        $("#Domicilio").val("");
        $("#Sexo").val("");
        $("#IMSS").val("");
        $("#CURP").val("");
        $("#Correo_electronico").val("");
        $("#id_grupo_fk").val("");
        $("#id_cuatrimestre_fk").val("");
        $("#id_campus_fk").val(""); 

  }
  
</script>

