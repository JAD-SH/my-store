<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'slug',
        'description',
        'color',
        'cover_image',
        'phone',
        'address',
        'active',
        'verified_at',
    ];

    public function getActive(){ 
        return $this-> active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function scopeActive($query){
        return $query -> where('active',1);
    }
    
    public function scopeSelection($query){
        return $query -> select('id',
        'name',
        'email',
        'slug',
        'description',
        'color',
        'cover_image',
        'phone',
        'address',
        'active',
        );
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
   
    public function offers()
    {
        return $this->hasManyThrough(
            Offer::class,
            Product::class
        );
    }
   

    public function favoriteProducts()
    {
        return $this->hasManyThrough(
            FavoriteProduct::class,
            Product::class
        );
    }

    public function mainDealer()
    {
        return $this->hasOne(MainDealer::class);
    }
}
