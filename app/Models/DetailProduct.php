<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
        'gallery',
        'outstand',
        'new',
        'selling',
    ];
    public function Level1ChildrentProduct(){
        return $this->hasmany(DetailProduct::class, 'level1_product_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
