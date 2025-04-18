<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_id', 
        'active',
        'image',
        'main_image'
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
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
