<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $table = "settings";
    protected $fillable = [
        'tittle',
        'address',
        'name',
        'email',
        'holine',
        'zalo',
        'phone',
        'website',
        'fanpage',
        'map',
        'link',
        'time',
        'phone',
        'product_number',
        'related_product_number',
        'posts',
        'related_posts',
        'map_iframe',
        'gg_analytic',
        'gg_webmaster_tool',
        'head_js',
        'body_js',

    ];

    // protected $attributes = ['id_status_activate' => 1, 'id_status_connect' => 1,];
}
