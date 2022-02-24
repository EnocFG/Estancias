<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando Empresa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Empresa</h1></header>
    <div class="resultados">
    <form method="POST" action="validar_insertar.php">
     
        <label for="">ID empresa
        <input type="text" name="id_empresa" id="id_empresa">
        </label>
        <input type="hidden" name="action" id="action">

        <br>

        <label for="">nombre
        <input type="text" name="Nombre_empresa" id="Nombre_empresa">
        </label>
        <br>

        <label for="">domicilio
        <input type="text" name="Domicilio_empresa" id="Domicilio_empresa">
        </label>
        <br>

        <label for="">telefono
        <input type="tel" name="Telefono_empresa" id="Telefono_empresa">
        </label>
        <br>
        
        <label for="">correo
        <input type="text" name="Correo_electronico" id="Correo_electronico">
        </label>
        <br>
        
        <input type="submit" name="Enviar" value="insertar" onclick="" >
    </form>
    <input type="submit" name="Menú" onclick="location.href='../Empresas/menu_empresas.php'" value="Menú">
    </div>
</body>
</html>
