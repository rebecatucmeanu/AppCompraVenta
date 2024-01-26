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
    }

    .menu 
    {
        overflow: hidden;
        background-color: #663F50;
        font-weight: bold;
        color: #f2f2f2;
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
        background-color: #51EAD9;
        color: #f2f2f2;
    }

    p 
    {
        color: #51EAD9;
    }

    button
    {
        background-color: #65E88E;
        color: #663F50;
        padding: 10px;
        border: none;
        cursor: pointer;
        margin-top: 10px;
    }

    button:hover
    {
        background-color: #40DC9D;
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
</body>
</html>