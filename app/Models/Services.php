<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description','picture','process','assurance','others'
    ];

    /**
     * Get all of the request for the Services
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function request()
    {
        return $this->hasMany(ServiceRequest::class);
    }
}
