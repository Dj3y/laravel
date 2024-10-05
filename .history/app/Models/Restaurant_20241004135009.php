<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    // use HasFactory;
    // protected $table = 'restaurants';
    protected $fillable = ['name', 'address',  "zipCode''phone_number'];
}
