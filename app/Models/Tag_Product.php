<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_Product extends Model
{
    use HasFactory;

    public $table = "tag_products";
    protected $fillable = [
        'image',
        'tittle',
        'outstand',
        'display',
    ];

    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
