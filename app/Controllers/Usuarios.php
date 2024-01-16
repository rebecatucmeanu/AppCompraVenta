<?php

namespace App\Controllers;

class Usuarios extends BaseController
{
    public function registro(): string
    {
        return view('templates/header').view('registro_usuario');
    }
}