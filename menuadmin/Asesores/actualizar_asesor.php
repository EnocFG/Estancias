<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Asesor</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Modicando Datos de Asesor Academico</h1>
    <form action="validar_actualizar.php" method="POST">
        <label for="">ID asesor</label>
        <input type="text" name="Id_asesor" id="Id_asesor" onblur="buscar_datos();" required><br>
        <label for="">Nombre</label>
        <input type="text" name="Nombre_asesor" id="Nombre_asesor" required><br>
        <label for="">Apellido paterno</label>
        <input type="text" name="Ap_paterno_asesor" id="Ap_paterno_asesor" required ><br>
        <label for="">Apellido materno</label>
        <input type="text" name="Ap_materno_asesor" id="Ap_materno_asesor" required><br>
        <input type="submit" value="actualizar">
        <input type="submit" id="enviar" name="Enviar" value="Cancelar" onclick="limpiar();">
        <input type="submit" name="Menú" onclick="location.href='../Asesores/menu_asesores.php'" value="Menú">
    </form>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $('.cargando').hige();
    });
    function buscar_datos(){
        Id_asesor = $("#Id_asesor").val();
    var parametros =
    {
        "buscar": "1",
        "Id_asesor": Id_asesor
    };
    $.ajax(
        {
            data: parametros,
            dataType: 'json',
            url: 'codigos_php.php',
            type: 'post',
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
            success: function(valores)
            {
                $("#Nombre_asesor").val(valores.Nombre_asesor);
                $("#Ap_paterno_asesor").val(valores.Ap_paterno_asesor);
                $("#Ap_materno_asesor").val(valores.Ap_materno_asesor);
            }

        })
    }
    function limpiar()
    {
                $("#Nombre_asesor").val("");
                $("#Ap_paterno_asesor").val("");
                $("#Ap_materno_asesor").val("");
    }
</script>

</html>