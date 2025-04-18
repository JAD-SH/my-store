<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Offer;
use App\Models\Dealer;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function products()
    {
        $products = Product::whereDoesNtHave('offer')->active()->selection()->get();
        return view('front.products',compact('products'));
    } 
    public function product($slug)
    {
        $product = Product::where('slug',$slug)->with('images')->active()->selection()->first();
        $offers =  Offer::active()->take(4)->get();

        $fav_product = Product::where('dealer_id',$product->dealer_id)->whereHas('favoriteProduct')->take(8);
        $fav_product_count = $fav_product->count();
        if($fav_product_count < 8){
            $more_product = Product::where('dealer_id',$product->dealer_id)->whereDoesNtHave('favoriteProduct')->take(8-$fav_product_count);
            $fav_product = $fav_product->union($more_product)->get();
        }
        
        return view('front.product',compact('product','offers','fav_product'));
    }
}
 