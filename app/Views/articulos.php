<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Para dar de alta un artículo, por favor, inicie sesión o regístrese.</h1>
    <div class="container-fluid bg-transparent my-4 p-3" style="position: relative;"> 
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 

        <?php foreach ($articulos as $articulo): ?>
            <div class="col"> 
                <div class="card h-100 shadow-sm"> 
                    <img src="<?php echo base_url('uploads/' . $articulo['archivo']); ?>" class="card-img-top" alt="Artículo"> 
                    <div class="card-body"> 
                        <div class="clearfix mb-3"> 
                            <span class="float-end price-hp"><?php echo $articulo['precio']; ?>&euro;</span> 
                        </div> 
                        <h5 class="card-title">Nombre:
                            <?php echo $articulo['nombre']; ?><br>
                            Marca:
                            <?php if (isset($articulo['marca'])): ?>
                                <?php echo $articulo['marca']; ?>
                            <?php endif; ?>
                        </h5> 
                    </div> 
                </div> 
            </div> 
        <?php endforeach; ?>

        </div>
    </div>

</body>
</html>