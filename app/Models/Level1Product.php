<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level1Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
    ];
}
