<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level3_Product extends Model
{
    use HasFactory;

    public $table = "level3_products";
    protected $fillable = [
        'image',
        'tittle',
        'display',
        'level2_product_id',
        'level1_product_id',
        'seo_id',
    ];

    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }

    public function level1_product()
    {
        return $this->belongsTo(Level1_Product::class, 'level1_product_id', 'id');
    }

    public function level2_product()
    {
        return $this->belongsTo(Level2_Product::class, 'level2_product_id', 'id');
    }
}
