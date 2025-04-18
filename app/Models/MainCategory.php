<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'active',
        'color',
        'created_at', 
        'updated_at'
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
        'slug',
        'description',
        'image',
        'active',
        'color'
        );
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            SubCategory::class
        );
    }
}
