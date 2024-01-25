<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Usuarios extends BaseController
{
    public function registro(): string
    {
        return view('templates/header').view('registro_usuario');
    }


    public function crear_usuario(): string
    {
        helper('form');
        return view('templates/header').view('registro_usuario');
    }

    public function guardar_usuario() 
    {
        $data = [];
        $data['nombre'] = $this->request->getPost('nombre');
        $data['contraseña'] = $this->request->getPost('contraseña');

        $modelo = model(UsuariosModel::class);
        if ($modelo->save($data))
        {
            return view('templates/header').view('templates/usuario_guardado');
        } else {
            return view('templates/header').view('templates/error_usuario_guardado');
        }
    } 

    public function mostrar_login(): string
    {
        helper('form');
        return view('templates/header').view('inicio_sesion');
    }

    public function comprobar_login() 
    {
        $data = [];
        $data['nombre'] = $this->request->getPost('nombre');
        $data['contraseña'] = $this->request->getPost('contraseña');
       
        $modelo = model(UsuariosModel::class);
        $usuario = $modelo->where($data)->first();


        if ($usuario) {
            $session = session();
            $session->set('usuario', $usuario); 
            
            return  view('templates/header').view('inicio_sesion_exito');
        } else {
            return view('templates/header').view('error_inicio_sesion');
        }
    }

    public function cerrar_sesion()
    {
        $session = session();
        $session->destroy();

        echo 'Sesión cerrada';
        return redirect()->to(base_url('Usuarios/mostrar_login'));
    }
}