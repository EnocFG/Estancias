<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando Asesores</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header><h1>Insertando Asesor</h1></header>
    <div class="container">
    <div class="cargando row">       
      <div class="d-flex justify-content-center">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Cargando...</span>
    </div>
  </div>
</div>
    <form method="POST" class="formulario" action="validar_insertar.php">
         <label for="">ID asesor <input type="text" name="Id_asesor" id="Id_asesor" onblur="buscar_datos()"></label><br>
         <label for="">Nombre<input type="text" name="Nombre_asesor" id="Nombre_asesor" required></label><br>
         <label for="">Apellido Paterno <input type="text" name="Ap_paterno_asesor" id="Ap_paterno_asesor"required> </label><br>
         <label for="">Apellido Materno <input type="text" name="Ap_materno_asesor" id="Ap_materno_asesor"required> </label><br>
         <input type="submit" value="enviar">
         <input type="button" name="Menú" onclick="location.href='../Asesores/menu_asesores.php'" value="Menú">
         <input type="button" value="cancelar" onclick="limpiar();">
    </form>
    </div>
        
</body>
</html>
<script type="text/javascript">
      $(document).ready(function(){
        $('.cargando').hide(); //ocultar
      });  
    function buscar_datos(){
        
        Id_asesor = $("#Id_asesor").val();
    
    var parametros =
    {
      "buscar": "1",
      "Id_asesor" : Id_asesor

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
        $("#Nombre_asesor").val(valores.Nombre_asesor);
        $("#Ap_paterno_asesor").val(valores.Ap_paterno_asesor);
        $("#Ap_materno_asesor").val(valores.Ap_materno_asesor);     
      }
    })
    }
  function limpiar()
  {


  }
  
</script>
