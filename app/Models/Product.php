<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'slug', 
        'name', 
        'description', 
        'active', 
        'rating', 
        'rating_count', 
        'price', 
        'stock_quantity', //الكمية
        'dealer_id',
        'sub_category_id', 
        'featured', 
        'brand', 
        'views',
        'weight', 
        'status',
        'dimensions', //ابعاد المنتج (الطول، العرض، الارتفاع)
        'available_since', //متى اصبح المنتج متاحا للبيع على المتجر(لا تستبدله ب created_at)
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
        'slug', 
        'name', 
        'description', 
        'active', 
        'rating', 
        'rating_count', 
        'price', 
        'stock_quantity',
        'dealer_id',
        'sub_category_id', 
        'featured', 
        'brand', 
        'views',
        'weight', 
        'status',
        'dimensions', 
        'available_since'
        );
    }
    public function favoriteProduct()
    {
        return $this->hasOne(FavoriteProduct::class);
    }
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    // دالة للحصول على منتجات مشابهة
    public function similarProducts($limit = 8)
    {
        return Product::where('sub_category_id', $this->sub_category_id)
            ->where('id', '!=', $this->id)
            ->with('colors') // تحميل الألوان مع كل منتج
            ->inRandomOrder()
            ->limit($limit)
            ->get();
    }
   /**علاقة الوان المنتج */
   public function colors()
   {
       return $this->belongsToMany(
        Color::class,
        ProductColorSize::class,
        'product_id',
        'color_id',
        'id'
    );
    }
    /**علاقة احجام المنتج */
    public function sizes()
    {
        return $this->belongsToMany(
            Size::class,
            ProductColorSize::class,
            'product_id',
            'size_id',
            'id'
        );
    }

    /**علاقة العروض */
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
    
    public function occasion()
    {
        return $this->hasOneThrough(
            Occasion::class,
            Offer::class,
            'product_id',
            'id',
            'id',
            'occasion_id'
        );
    }
    
    public function offerType()
    {
        return $this->hasOneThrough(
            OfferType::class,
            Offer::class,
            'product_id',
            'id',
            'id',
            'offer_type_id'
        );
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
}
