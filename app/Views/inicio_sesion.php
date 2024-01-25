<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <style>
        form, h1
        {
            padding-left: 25px;
        }
    </style>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Usuarios/comprobar_login') ?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/><br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña"/><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>