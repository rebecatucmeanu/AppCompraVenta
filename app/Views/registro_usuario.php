<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <style>
        body {
            background-color: #A4BBCE;
            color: #663F50;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #51EAD9;
            color: #663F50;
            padding: 20px;
            margin: 0;
        }

        form {
            background-color: #40DC9D;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
        }

        label {
            color: #663F50;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #65E88E;
            color: #663F50;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #51EAD9;
        }
    </style>
</head>
<body>
    <h1>Registrarse</h1>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Usuarios/guardar_usuario') ?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/><br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña"/><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>