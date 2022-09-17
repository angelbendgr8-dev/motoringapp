<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDiscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'engine','interior_color','exterior_color','vin','car_id','transmission'
    ];
}
