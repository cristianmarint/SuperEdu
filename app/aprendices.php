<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class aprendices extends Model
{
    protected $table = 'aprendices';

    use SoftDeletes;

    protected $fillable = [
        'cedula',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function calificacion()
    {
        return $this->hasOne('App\calificaciones');
    }
}
