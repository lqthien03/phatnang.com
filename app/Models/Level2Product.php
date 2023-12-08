<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level2Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
        'level1_product_id'
    ];
    public function Level2Childrent(){
        return $this->hasmany(Level3Product::class, 'level2_product_id');
    }
}
