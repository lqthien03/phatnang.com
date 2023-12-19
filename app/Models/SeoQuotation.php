<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoQuotation extends Model
{
    use HasFactory;

    public $table = "seo_quotations";
    protected $fillable = [
        'image',
        'seo_id',
    ];
    public $timestamps = false;
    public function seo()
    {
        return $this->belongsTo(Seo::class, 'seo_id', 'id');
    }
}
