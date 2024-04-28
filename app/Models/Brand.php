<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    /**
     * Get all of the energyDrinks for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function energyDrinks(): HasMany
    {
        return $this->hasMany(EnergyDrink::class);
    }
}
