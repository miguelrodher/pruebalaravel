<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    protected $table = 'grupos';
    protected $primaryKey = 'id_grupo'; 
    public $incrementing = true;        
    protected $fillable = ['semestre','grupo','turno'];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'grupo_id', 'id_grupo');
    }
}
