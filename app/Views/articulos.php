<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
            padding-top: 20px;
        }

        .container-fluid 
        {
            position: relative;
        }

        .container-fluid.bg-transparent 
        {
            background-color: transparent;
        }

        .my-4 
        {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .p-3 
        {
            padding: 1rem !important;
        }

        .row-cols-1, .row-cols-xs-2, .row-cols-sm-2, .row-cols-lg-4 
        {
            column-gap: 1rem;
        }

        .g-3 
        {
            gap: 1rem !important;
        }

        .card 
        {
            background-color: #A4BBCE;
            border: none;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover 
        {
            transform: scale(1.05);
        }

        .card-img-top 
        {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body 
        {
            padding: 1rem;
        }

        .price-hp 
        {
            color: #65E88E;
            font-weight: bold;
            font-size: 1.25rem;
        }

        .card-title 
        {
            color: #663F50;
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }
    </style>
</head>
<body>
    <h1>Para dar de alta un artículo, por favor, inicie sesión o regístrese.</h1>
    <div class="container-fluid bg-transparent my-4 p-3"> 
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