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

    <form method="POST" class="formulario" action="validar_insertar.php">
         <label for="">Nombre<input type="text" name="Nombre_asesor" id="Nombre_asesor" required></label><br>
         <label for="">Apellido Paterno <input type="text" name="Ap_paterno_asesor" id="Ap_paterno_asesor"required> </label><br>
         <label for="">Apellido Materno <input type="text" name="Ap_materno_asesor" id="Ap_materno_asesor"required> </label><br>
         <input type="submit" value="enviar">
         <input type="button" name="Menú" onclick="location.href='../Asesores/menu_asesores.php'" value="Menú">
         <input type="button" value="cancelar" onclick="limpiar();">
    </form>

        
</body>
</html>

