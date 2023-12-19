<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    use HasFactory;
    public $table = "slideshows";
    protected $fillable = [
        'image',
        'tittle',
        'link',
        'display',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;
}
