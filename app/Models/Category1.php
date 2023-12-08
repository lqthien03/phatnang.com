<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    use HasFactory;

    public $table = "category1s";
    protected $fillable = [
        'image',
        'tittle',
        'outstand',
        'display',
        'level2_product_id',
        'seo_id',
    ];
}
