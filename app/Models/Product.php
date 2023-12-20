<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = "detail_products";
    protected $fillable = [
        'image',
        'tittle',
        'gallery',
        'outstand',
        'new',
        'selling',
        'display',
        'product_code',
        'discount',
        'describe',
        'content',
        'price',
        'gallery',
        'new_price',
        'level1_product_id',
        'level2_product_id',
        'level3_product_id',
        'tag_product_id',
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
    public function level3_product()
    {
        return $this->belongsTo(Level3_Product::class, 'level3_product_id', 'id');
    }
    public function tag_product()
    {
        return $this->belongsTo(Tag_Product::class, 'tag_product_id', 'id');
    }
}
