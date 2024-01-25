<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $allowedFields = ['nombre', 'contraseña'];
    public function getUsuario($id)
    {
        return $this->find($id);
    }
}