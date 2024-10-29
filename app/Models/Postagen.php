<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Postagen extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'titulo',
        'conteudo',
        'capa',
        'data_postagem',
        'categoria',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->data_postagem = Carbon::now(); // Define a data atual ao criar
        });
    }
}
