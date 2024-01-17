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
        $session = session();
        $session->set('nombre', 'Rebeca');
        // echo $session->get('texto');
        // // exit;  // Esto sirve para que te muestre estrictamente el código hasta este punto, y no todo lo demás.
        return view('templates/header').view('articulos');
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
        
        $imagen = $this->request->getFile('imagen');
        $imagen->move('../public/uploads', $imagen->getName());

        $modelo = model(ArticulosModel::class);
        $modelo->save($data);
    }

    public function mostrarTodo()
    {
        $modelo = model(ArticulosModel::class);
        $data['articulos'] = $modelo->findAll();
        $data['titulo'] = 'Listado de artículos';
        return view('templates/header', $data).view('articulos');
    }
} 