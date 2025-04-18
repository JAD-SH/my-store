<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    
   
    public function dealers()
    {
        $dealers = Dealer::active()->selection()->get();
        return view('front.dealers',compact('dealers'));
    } 
    public function dealer($slug)
    {
        $dealer = Dealer::where('slug',$slug)->with('products')->active()->selection()->first();
        return view('front.dealer',compact('dealer'));
    }
}
