<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticulosModel extends Model
{
    protected $table = 'articulos';
    protected $allowFields = ['nombre', 'marca', 'precio'];

    // Para obtener todos los artículos
    public function getArticulos()
    {
        return $this->findAll();
    }
}