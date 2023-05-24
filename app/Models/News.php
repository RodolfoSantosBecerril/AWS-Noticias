<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Define la tabla asociada al modelo (opcional si el nombre de la tabla sigue las convenciones de Laravel)
    protected $table = 'news';

    // Define los campos que pueden ser asignados en masa
    protected $fillable = [
        'title',
        'description',
        'url',
        // Agrega otros campos que desees guardar en la base de datos
    ];
}
