<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    use HasFactory;
    /*campos que serão inseridos na tabela*/
    /*para cada tabela, uma model */
    protected $fillable = [
        'nomeBebida',
        'marcaBebida'
    ];
}
