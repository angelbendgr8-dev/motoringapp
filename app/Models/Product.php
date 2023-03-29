<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'maker',
        'model',
        'caryear',
        'mileage',
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
        'features',
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
    protected function images(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
      /**
     * Get the engine inspections.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function features(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inspection(): HasOne
    {
        return $this->hasOne(CarInspection::class);
    }

}