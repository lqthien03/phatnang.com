<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    public $table = "detail_quotations";
    protected $fillable = [
        'tittle',
        'display',
        'seo_id',
    ];
}
