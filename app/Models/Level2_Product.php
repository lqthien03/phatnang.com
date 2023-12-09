<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level2_Product extends Model
{
    use HasFactory;

    public $table = "level2_products";
    protected $fillable = [
        'image',
        'tittle',
        'display',
        'level3_product_id',
        'seo_id',
    ];
}
