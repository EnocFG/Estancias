<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Alumno</title>
</head>
<body>
    <h1>Actualizando Alumno</h1>
    <form action="validar_actualizar.php" method="GET">
        <label for="">Matricula  <input type="text" name="Matricula" id=""></label><br>
        <label for="">Nombre <input type="text" name="Nombre_alumno" id=""></label><br>
        <label for="">Apellido Paterno <input type="text" name="Ap_paterno_alumno" id=""></label><br>
        <label for="">Apellido Materno <input type="text" name="Ap_materno_alumno" id=""></label><br>
        <label for="">Domicilio <input type="text" name="Domicilio" id=""></label><br>
        <label for="">Sexo <input type="text" name="Sexo" id=""></label><br>
        <label for="">IMSS <input type="text" name="IMSS" id=""></label><br>
        <label for="">CURP <input type="text" name="CURP" id=""></label><br>
        <label for="">Correo <input type="text" name="Correo_electronico" id=""></label><br>
        <label for="">ID grupo <input type="text" name="id_grupo_fk" id=""></label><br>
        <label for="">ID cuatrimestre <input type="text" name="id_cuatrimestre_fk" id=""></label><br>
        <label for="">ID campus <input type="text" name="id_campus_fk" id=""></label><br>
        <input type="submit" value="actualizar">
    </form>
    <input type="submit" name="Menú" onclick="location.href='../Alumnos/menu_alumnos.php'" value="Menú">
</body>
</html>
