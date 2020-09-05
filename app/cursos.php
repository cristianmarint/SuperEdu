<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cursos extends Model
{
    protected $table = 'cursos';

    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function calificacion()
    {
        return $this->hasOne('App\calificaciones');
    }

}
