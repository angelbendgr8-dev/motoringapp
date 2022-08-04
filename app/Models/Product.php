<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'maker',
        'model',
        'caryear',
        'carColor',
        'mileage',
        'location',
        'fuelType',
        'bodyType',
        'gearType',
        'sellingCondition',
        'price',
        'name',
        'email',
        'phone_number',
        'address',
        'area',
        'state',
        'images',
        'date',
        'type',
        'user_id',
        'status',
    ];


    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
