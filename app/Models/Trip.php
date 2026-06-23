<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['name', 'price', 'city', 'type', 'image', 'rating'];
}
