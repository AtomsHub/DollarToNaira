<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    public function currencyRates()
    {
        return $this->hasMany(Currencyrates::class);
    }

    // One-to-many relationship with ExchangeRate
    public function exchangeRates()
    {
        return $this->hasMany(ExchangeRate::class);
    }
}
