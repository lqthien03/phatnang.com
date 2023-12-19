<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    public $table = "logos";
    protected $fillable = [
        'image',
        'display',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;
}
