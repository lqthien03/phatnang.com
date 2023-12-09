<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level1_Product extends Model
{
    use HasFactory;

    public $table = "level1_products";
    protected $fillable = [
        'image',
        'tittle',
        'outstand',
        'display',
        'level2_product_id',
        'seo_id',
    ];
}
