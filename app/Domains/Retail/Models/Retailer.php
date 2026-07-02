<?php

namespace App\Domains\Retail\Models;

use App\Domains\Location\Models\Country;
use App\Domains\Location\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Retailer extends Model
{
    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'website_url',
        'facebook_url',
        'instagram_url',
        'is_chain',
        'is_active',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function stores(): HasMany
    {
        return $this->hasMany(Store::class);
    }
}