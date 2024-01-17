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
    <div>
        <?php
            if(isset($guardado))
            {
            ?>
                <p>Los datos se han guardado correctamente.</p>
                <a href="<?php echo base_url()?>">Volver</a>
            <?php    
            }
        ?>
    </div>
    <form method="post" action="<?php echo base_url('articulos/guardar') ?>" enctype="multipart/form-data">
        <div> 
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/><br>
        </div>
        <div>
            <label for="nombre">Marca</label>
            <input type="text" name="marca"/><br>
        </div>
        <div>
            <label for="nombre">Precio</label>
            <input type="text" name="precio"/><br>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen">
        </div>
        <div>
            <input type="submit" name="Enviar">
        </div>
    </form>
</body>
</html>