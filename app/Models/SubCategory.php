<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'main_category_id',
        'slug',
        'image',
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
    
    public function scopeSelection($query){
        return $query -> select('id',
        'name',
        'description',
        'main_category_id',
        'slug',
        'image',
        'active'
        );
    }

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
