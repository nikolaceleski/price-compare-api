<?php

namespace App\Domains\Location\Models;

use App\Domains\Retail\Models\Retailer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
        'is_active',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function retailers(): HasMany
    {
        return $this->hasMany(Retailer::class);
    }
}