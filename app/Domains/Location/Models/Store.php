<?php

namespace App\Domains\Location\Models;

use App\Domains\Retail\Models\Retailer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store extends Model
{
    protected $fillable = [
        'retailer_id',
        'city_id',
        'name',
        'slug',
        'address',
        'phone',
        'latitude',
        'longitude',
        'has_parking',
        'supports_delivery',
        'supports_pickup',
        'is_active',
    ];

    public function retailer(): BelongsTo
    {
        return $this->belongsTo(Retailer::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}