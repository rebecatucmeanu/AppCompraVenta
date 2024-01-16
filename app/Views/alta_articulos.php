<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba BBDD</title>
    <style>
        form, h1 
        {
            padding-left: 25px;
        }
    </style>
</head>
<body>
    <h1>Alta de artículos de ropa</h1>
    <form method="post" action="<?php echo base_url('articulos/guardar') ?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/><br>
        <label for="nombre">Marca</label>
        <input type="text" name="marca"/><br>
        <label for="nombre">Precio</label>
        <input type="text" name="precio"/><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>