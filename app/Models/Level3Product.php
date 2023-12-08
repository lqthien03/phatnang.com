<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level3Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
        'level2_product_id'
    ];
}
