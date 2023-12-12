<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    public $table = "seos";
    protected $fillable = [
        'tittle',
        'keyword',
        'description',
    ];

    public $timestamps = false;
}
