<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    //
    protected $fillable = 
    [
        'titulo', 
        'descricao',
        'ano',
        'valor',
        'marca_id'
    ];

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
