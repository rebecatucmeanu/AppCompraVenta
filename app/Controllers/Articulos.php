<?php

namespace App\Controllers;
use App\Models\ArticulosModel;

class Articulos extends BaseController
{
    public function alta_articulos(): string
    {
        $data['titulo'] = 'Alta de articulos';
        return view('templates/header').view('alta_articulos');
    }

    public function ver_articulos(): string
    {
        $modelo = new ArticulosModel();

        $articulos = $modelo->findAll();

        return view('templates/header', ['articulos' => $articulos]);
    }

    public function crear(): string
    {
        helper('form');
        return view('templates/header').view('templates/alta_articulos');
    }

    public function guardar()
    {
        $data = [];
        $data['nombre'] = $this->request->getPost('nombre');
        $data['marca'] = $this->request->getPost('marca');
        $data['precio'] = $this->request->getPost('precio');
        
        $imagen = $this->request->getFile('archivo');
        $nombreAleatorio = $imagen->getRandomName();
        $imagen->move('../public/uploads', $nombreAleatorio);

        $modelo = model(ArticulosModel::class);

        if ($modelo->save($data))
        {
            return view('templates/header').view('templates/datos_guardados');
        } else 
        {
            return view('templates/header').view('templates/error_bbdd');
        }
    }

    public function mostrarTodo()
    {
        $modelo = new ArticulosModel();
        $data['articulos'] = $modelo->findAll();
        $data['titulo'] = 'Listado de artículos';
        return view('templates/header', $data).view('articulos', $data);
    }

    public function mostrar($id_articulo)
    {
        $modelo = model(ArticulosModel::class);
        $articulo = $modelo->find($id_articulo);
        $data['titulo'] = 'Detalle de artículo';
        return view('templates/header', $data).view('articulo');
    }

    public function iniciar_sesion()
    {
        // Validación del formulario de inicio de sesión
        $validacionSesion = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($validacionSesion)) {
            // Si la validación falla, vuelve a cargar el formulario de inicio de sesión
            return view('templates/header').view('registro_usuario_fallido');
        }

        // Validar credenciales y establecer la sesión
        // ...

        return redirect()->to('inicio_sesion'); // Cambia 'dashboard' por la URL de la página que deseas mostrar después del inicio de sesión
    }
} 