<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    
    public function offers()
    {
        $offers = Offer::active()->get();
        return view('front.offers',compact('offers'));
    } 
    public function offer($slug)
    {
        $product = Product::where('slug',$slug)->with('images')->active()->selection()->first();
        return view('front.product',compact('product'));
    }
}
