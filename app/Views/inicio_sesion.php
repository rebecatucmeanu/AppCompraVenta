<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <style>
        body 
        {
            margin: 0;
            background-color: #A4BBCE;
            color: #663F50;
        }

        h1 
        {
            padding-left: 25px;
            color: #51EAD9;
        }

        form 
        {
            padding-left: 25px;
            margin-top: 20px;
        }

        label 
        {
            color: #663F50;
            display: block;
            margin-bottom: 5px;
        }

        input 
        {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] 
        {
            background-color: #65E88E;
            color: #663F50;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover 
        {
            background-color: #40DC9D;
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