<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante'; 
    public $incrementing = true;
    protected $fillable = ['nombre','apellidos','edad','email','telefono','grupo_id'];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id', 'id_grupo');
    }
}
