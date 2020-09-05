<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class calificaciones extends Model
{
    protected $table = 'calificaciones';

    use SoftDeletes;

    protected $fillable = [
        'nota',
        'description',
    ];

    public function aprendiz()
    {
        return $this->belongsTo('App\aprendices');
    }
    
    public function curso()
    {
        return $this->belongsTo('App\cursos');
    }
}
