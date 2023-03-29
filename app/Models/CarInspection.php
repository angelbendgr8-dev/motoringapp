<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarInspection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','product_id','engines','electricals','interior','exterior',
        'air_conditioning','transmission_and_clutch','test_drive','suspension_and_steering'
    ];

    /**
     * Get the engine inspections.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function engines(): Attribute
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
    protected function electricals(): Attribute
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
    protected function transmissionAndClutch(): Attribute
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
    protected function testDrive(): Attribute
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
    protected function suspensionAndSteering(): Attribute
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
    protected function interior(): Attribute
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
    protected function exterior(): Attribute
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
    protected function airConditioning(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    /**
     * Get the user that owns the CarInspection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}