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

    p 
    {
        color: #a742f5;
    }
</style>
</head>
<body>
    <div class="menu">
        <a href="<?php echo base_url() ?>articulos/ver_articulos" class="artículos">Artículos</a>
        <a href="<?php echo base_url() ?>usuarios/crear_usuario" class="registro">Registrar un usuario</a>
        <a href="<?php echo base_url() ?>usuarios/mostrar_login" class="sesion">Iniciar sesión</a>

        <?php
        $session = session();
        if ($session->has('usuario') && $session->get('usuario')['nombre']) {
            // Si el usuario está autenticado, muestra el mensaje
            echo '<p>Gestión de ' . $session->get('usuario')['nombre'] . '</p>';
        }
        ?>
    </div>
    <a href="<?php echo base_url() ?>usuarios/cerrar_sesion"><button>Cerrar sesión</button></a>