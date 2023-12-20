<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportCustomer extends Model
{
    use HasFactory;

    public $table = "customer_supports";
    protected $fillable = [
        'tittle',
        'display',
        'phone',
        'zalo',
    ];

    public $timestamps = false;
}
