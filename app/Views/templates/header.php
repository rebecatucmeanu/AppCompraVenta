<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body 
    {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .menu 
    {
        overflow: hidden;
        background-color: black;
        font-weight: bold;
    }

    .menu a
    {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .menu a:hover
    {
        background-color: #a742f5;
        color: white;
    }
</style>
</head>
<body>
    <div class="menu">
        <a href="<?php echo base_url() ?>articulos/alta_articulos" class="alta">Dar de alta un artículo</a>
        <a href="<?php echo base_url() ?>articulos/ver_articulos" class="artículos">Artículos</a>
        <a href="<?php echo base_url() ?>usuarios/crear_usuario" class="registro">Registrar un usuario</a>
        <a href="<?php echo base_url() ?>usuarios/inicio_sesion" class="sesion">Iniciar sesión</a>
    </div>