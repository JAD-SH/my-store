<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'occasion',
        'start_date',
        'end_date',
        'active',
        'description',
        'created_at', 
        'updated_at'
    ];

    /**علاقات العروض */
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    
    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            Offer::class,
            'occasion_id',
            'id',
            'id',
            'product_id'
        );
    }
    
}
