<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'offer_type_id',
        'occasion_id',
        'product_id',
        'discount',
        'new_price',
        'end_date',
        'start_date',
        'active',
        'created_at', 
        'updated_at'
    ];

    public function getActive(){ 
        return $this-> active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function scopeActive($query){
        return $query -> where('active',1);
    }

    /**علاقة العروض */
    public function offerType()
    {
        return $this->belongsTo(OfferType::class);
    }
    
    public function occasion()
    {
        return $this->belongsTo(Occasion::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    /**علاقة العروض */
    public function favoriteProduct()
    {
        return $this->hasOneThrough(
            FavoriteProduct::class,
            Product::class
        );
    }
}
