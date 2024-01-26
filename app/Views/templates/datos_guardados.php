<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body 
    {
        margin: 0;
        background-color: #A4BBCE;
        color: #663F50;
        text-align: center;
        padding: 50px;
    }

    h1 
    {
        color: #51EAD9;
        margin-bottom: 20px;
    }

    button
    {
        background-color: #65E88E;
        color: #663F50;
        padding: 10px;
        border: none;
        cursor: pointer;
        margin: 10px;
    }

    button:hover
    {
        background-color: #40DC9D;
    }
</style>
</head>
<body>
    <h1>Datos guardados con éxito.</h1>
    <a href="<?php echo base_url('articulos/ver_articulos') ?>"><button>Ir a la página principal</button></a>  
    <a href="<?php echo base_url('articulos/crear') ?>"><button>Dar de alta un artículo</button></a>  
</body>
</html>