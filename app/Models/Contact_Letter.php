<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Letter extends Model
{
    use HasFactory;

    public $table = "contact_letters";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'topic',
        'content',
        'note',
        'confirm',
    ];
    public $timestamps = false;
}
