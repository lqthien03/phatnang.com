<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Home extends Model
{
    use HasFactory;

    public $table = "home_images";
    protected $fillable = [
        'image',
        'display',
    ];
    public $timestamps = false;
}
