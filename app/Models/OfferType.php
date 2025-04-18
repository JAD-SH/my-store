<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferType extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'slug',
        'type',
        'description',
        'active'
    ];
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    
    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            Offer::class,
            'offer_type_id', // Foreign key on offers table
            'id', // Foreign key on products table
            'id', // Local key on offer_types table
            'product_id' // Local key on offers table
        );
    }
    
    public function occasions()
    {
        return $this->hasManyThrough(
            Occasion::class,
            Offer::class,
            'offer_type_id', // Foreign key on offers table
            'id', // Foreign key on occasions table
            'id', // Local key on offer_types table
            'occasion_id' // Local key on offers table
        );
    }
}
