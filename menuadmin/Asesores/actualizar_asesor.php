<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Asesor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modicando Datos de Asesor Academico</h1>
    <form action="validar_actualizar.php" method="GET">
        <label for="">ID asesor</label>
        <input type="text" name="Id_asesor" id="" required><br>
        <label for="">nombre</label>
        <input type="text" name="Nombre_asesor" id="" required><br>
        <label for="">apellido paterno</label>
        <input type="text" name="Ap_paterno_asesor" id="" required ><br>
        <label for="">apellido materno</label>
        <input type="text" name="Ap_materno_asesor" id="" required><br>
        <input type="submit" value="actualizar">
        <input type="submit" name="Menú" onclick="location.href='menu_asesores.php'" value="Menú">
    </form>
   
</body>
</html>