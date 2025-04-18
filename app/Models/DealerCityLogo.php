<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerCityLogo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'dealer_id',
        'city_id',
        'logo_id'
    ];
}
