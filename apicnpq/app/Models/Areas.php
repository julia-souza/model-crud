<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_area',
        'nome_subarea',
        'nome_grandearea',
    ];
}
