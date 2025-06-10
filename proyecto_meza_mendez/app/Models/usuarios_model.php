<?php

namespace App\Models;
use codeIgniter\Model;

class usuarios_model extends Model 
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id';
	protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja'];
}
?>