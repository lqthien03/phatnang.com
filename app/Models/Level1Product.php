<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level1Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
    ];
    public function Level1Childrent(){
        return $this->hasmany(Level2Product::class, 'level1_product_id');
    }
    public function Level1ChildrentProduct(){
        return $this->hasmany(DetailProduct::class, 'level1_products_id');
    }
}
