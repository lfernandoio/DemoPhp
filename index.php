<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Alumno</title>
    <link  rel="stylesheet" type="text/css" href="Estilo/Style.css">
</head>
<body>
    <form method="POST">
        <p> Registro Alumno</p>
        <div class="form-Alumno">
            <input type="text" class="form-Alumno" id="name" name="Nombre" placeholder="Nombre">
        </div>
        <div class="form-Alumno">
            <input type="text" class="form-Alumno" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-Alumno">
            <input type="password" class="form-Alumno" id="password" name="password" placeholder="Contrasena">
        </div>
        <div class="form-Alumno">
            <input type="text" class="form-Alumno" id="NroDoc" name="NroDoc" placeholder ="CI/NIT">
        </div>    
        <input class="BtnAlumno" type="submit" name="BtnRegistrarAlumno" value="Registrar">
    </form>
    <?php   
        include ("CapaNegocio/Alumno.php"); 
    ?>
</body>
</html>