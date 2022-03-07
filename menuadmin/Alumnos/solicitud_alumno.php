<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Alumno</title>
</head>
<body>
    <h1>Llenado de solicitud Alumno</h1>
    <form action="" method="post">
        <!-- <div style="float:left"> -->
        <label for="">ID solicitud <input type="text" name="id_solicitud" id=""></label><br>
         <label for="">Nombre <input type="text" name="Nombre_alumno_sol" id=""></label><br>
        <label for="">Apellido paterno <input type="text" name="Ap_paterno_alumno_sol" id=""></label><br>
        <label for="">Apellido materno <input type="text" name="Ap_materno_alumno_sol" id=""></label><br>
        <label for="">Domicilio <input type="text" name="Domicilio_alumno" id=""></label><br>
         <label for="">Sexo <input type="text" name="Sexo_alumno" id=""></label><br>
         <label for="">IMSS <input type="text" name="IMSS"></label><br>
         <label for="">CURP <input type="text" name="CURP" id=""></label><br>
         <label for="">Matricula <input type="text" name="Matricula_fk" id=""></label><br>
         <label for="">Correo Electronico <input type="text" name="" id="correo_electronico_fk"></label><br>
        <!-- </div> -->
        <!-- <div style="float:left"> -->
         <label for="">ID telefono <input type="text" name="id_telefono_al_fk" id=""></label><br>
         <label for="">Fecha Elaboracion <input type="date" name="Fecha_elaboracion" id=""></label><br>
        <label for="">Programa Educativo
        <select name="programas">
            <?php
            require 'conexion.php';
            $obtenerProgramas = 'SELECT * FROM programa_educativo';
            $obtenerProgramas2 = mysqli_query($conn, $obtenerProgramas);
            while ($row = mysqli_fetch_array($obtenerProgramas2)) {

                $Id_programa_educativo = $row['Id_programa_educativo'];
                $Descripcion_pe = $row['Descripcion_pe'];
                ?>
                <option value="<?php echo $Id_programa_educativo; ?>"> <?php echo $Descripcion_pe; ?> </option>
                <?php
            }
            ?>
        </select>
        </label><br>
         <label for="">Cuatrimestre <input type="text" name="Cuatrimestre"></label><br>
         <label for="">Grupo <input type="text" name="Grupo"></label><br>
         <label for="">Modalidad <input type="text" name="Modalidad" id=""></label><br>
         <label for="">Nombre Asesor <input type="text" name="Nombre_asesor"></label><br>
         <label for="">Apellido Paterno <input type="text" name="Ap_paterno_asesor" id=""></label><br>
         <label for="">Apellido Materno <input type="text" name="Ap_materno_asesor" id=""></label><br>
         <label for="">Nombre del Proyecto <input type="text" name="Nombre_proyecto" id=""></label>
        <!-- </div> -->
        <input type="submit" value="Insertar">
        <input type="button" value="Cancelar" class="btn btn-danger" onclick="limpiar();">
    </form>  
</body>
</html>
