<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoProduct extends Model
{
    use HasFactory;

    public $table = "seo_products";
    protected $fillable = [
        'image',
        'seo_id',
        'keyword',
        'description',
    ];
    public $timestamps = false;
}
