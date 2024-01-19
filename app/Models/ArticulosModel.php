<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticulosModel extends Model
{
    protected $table = 'articulos';
    protected $allowFields = ['nombre', 'marca', 'precio'];

    // // Para obtener todos los artículos
    // public function getArticulos()
    // {
    //     return $this->findAll();
    // }
    public function getArticulo($id)
    {
        return $this->find($id);

        // $this->where('id', $id);
        // return $this->first();

        // return $this->db->query('select * from articulos where id='.$id)->getResult('array')[0];
    }
}