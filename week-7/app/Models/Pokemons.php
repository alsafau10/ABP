<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemons extends Model
{
    protected $table = 'pokemons';
    protected $primaryKey = 'id';
    protected $fillable =[
        'name',
        'element',
        'attPower',
    ];
    use HasFactory;

}
