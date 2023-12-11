<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level3_Product extends Model
{
    use HasFactory;

    public $table = "level3_products";
    protected $fillable = [
        'image',
        'tittle',
        'display',
        'detail_product_id',
        'seo_id',
    ];
}
