<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = ['descricao', 'complemento', 'quantidade'];
}

