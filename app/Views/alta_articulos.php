<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos BBDD</title>
    <style>
        body 
        {
            margin: 0;
            background-color: #A4BBCE;
            color: #663F50;
            padding-left: 25px;
        }

        h1 
        {
            color: #51EAD9;
        }

        form 
        {
            padding-left: 43%;
            padding-top: 7%;
        }

        form div 
        {
            margin-bottom: 15px;
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

        p 
        {
            color: #51EAD9;
        }

        a 
        {
            color: #51EAD9;
            text-decoration: none;
            margin-right: 15px;
        }

        a:hover 
        {
            color: #40DC9D;
        }
    </style>
</head>
<body>
    <h1>Alta de artículos de ropa</h1>
    <div> <?php
        if(isset($guardado))
        {
        ?>
            <p>Los datos se han guardado correctamente.</p>
            <a href="<?php echo base_url() ?>articulos/ver_articulos">Ver artículos</a>
            <a href="<?php echo base_url() ?>articulos/crear">Dar de alta otro artículo</a>
        <?php    
        }
        else
        {
    ?> </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Articulos/guardar') ?>">
        <div> 
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/><br>
        </div>
        <div>
            <label for="marca">Marca</label>
            <input type="text" name="marca"/><br>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="text" name="precio"/><br>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="file" name="archivo" class="form-control"  />
        </div>
        <div>
            <input type="submit" name="Enviar">
        </div>
    </form>
    <?php
    }
    ?>
</body>
</html>