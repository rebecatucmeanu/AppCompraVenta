<?php

namespace App\Controllers;

class Tiendas extends BaseController
{
    public function listado_tiendas(): string
    {
        return view('templates/header').view('listado_tiendas');
    }
}