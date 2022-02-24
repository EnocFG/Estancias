<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Empresa</title>
</head>
<body>
    <h1>Actualizando Empresa</h1>
    <form action="validar_actualizar.php" method="GET">
        <label for="">ID<input type="text" name="id_empresa" id="" required></label><br>
        <label for="">Nombre<input type="text" name="Nombre_empresa" id=""></label><br>
        <label for="">Domicilio<input type="text" name="Domicilio_empresa" id=""></label><br>
        <label for="">Telefono<input type="text" name="Telefono_empresa" id=""></label><br>
        <label for="">Correo<input type="text" name="Correo_electronico" id=""></label><br>
        <input type="submit" value="Actualizar">
    </form>
    <input type="submit" name="Menú" onclick="location.href='../Empresas/menu_empresas.php'" value="Menú">
</body>
</html>