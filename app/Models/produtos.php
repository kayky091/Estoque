<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = ['descricao', 'complemento', 'quantidade', 'forn_id'];

    public function fornecedor()
    {
        return $this->hasOne('App\fornecedores');
    }
}

