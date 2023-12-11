<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "detail_products";
    protected $fillable = [
        'image',
        'tittle',
        'gallery',
        'outstand',
        'new',
        'selling',
        'display',
        'display',
    ];
}
