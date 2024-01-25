<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <style>
        form, h1, h2
        {
            padding-left: 25px;
        }
    </style>
</head>
<body>
    <h1>Usuarios</h1>
    <h2>Error de inicio de sesión.</h2><br>
    <h2>Por favor, vuelva a intentar.</h2>
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/><br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion"/><br>
        <label for="dni">DNI</label>
        <input type="text" name="dni"/><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>