<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network_Society extends Model
{
    use HasFactory;

    public $table = "social_networks";
    protected $fillable = [
        'image',
        'link',
        'display',
    ];
    // protected $attributes = ['outstand' => 1,];
    public $timestamps = false;
}
