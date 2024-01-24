<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticulosModel extends Model
{
    protected $table = 'articulos';
    protected $allowedFields = ['nombre', 'marca', 'precio', 'archivo'];
    public function getArticulo($id)
    {
        return $this->find($id);
    }
}