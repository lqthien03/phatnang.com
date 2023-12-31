<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoNews extends Model
{
    use HasFactory;

    public $table = "seo_news";
    protected $fillable = [
        'image',
        'seo_id',
        'tittle',
        'keyword',
        'description',
    ];

    public $timestamps = false;
}
