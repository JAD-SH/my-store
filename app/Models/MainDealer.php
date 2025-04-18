<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDealer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'dealer_id', 
        'product_id', 
        'image',
        'active'
    ];
    public function getActive(){ 
        return $this-> active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function scopeActive($query){
        return $query -> where('active',1);
    }
    public function getImageAttribute($value){ 
        return asset('public/build/assets/'.$value);
    }
    public function scopeSelection($query){
        return $query -> select('id',
        'dealer_id', 
        'product_id', 
        'image',
        'active'
        );
    }
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
