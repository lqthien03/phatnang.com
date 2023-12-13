<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level1_Quotation extends Model
{
    use HasFactory;

    public $table = "level1_quotations";
    protected $fillable = [
        'image',
        'tittle',
        'display',
        'seo_id',


    ];
    public $timestamps = false;

    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
