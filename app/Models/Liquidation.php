<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liquidation extends Model
{
    use HasFactory;

    public $table = "liquidations";
    protected $fillable = [
        'image',
        'tittle',
        'display',
        'content',
        'seo_id',
    ];
    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
