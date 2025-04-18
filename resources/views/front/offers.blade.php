@extends('layouts.front.body')

@section('css')
<link href="{{asset('public/build/assets/css/offers.css')}}" rel="stylesheet" />
<style>
    
    
</style>
 @endsection

@section('content')
 
<div class="container  py-5">
    
    @include('front.includes.filters',['catName'=>'اسم القسم','catDescription'=>'هنا وصف عن القسم'])

    <div class="row">

        @foreach($offers as $offer)
            @include('front.includes.offersTemplate', [
                'title' => $offer->title ,
                'description' => $offer->description ,
                'rating' => $offer->product->rating ,
                'rating_count' => $offer->product->rating_count ,
                'price' => $offer->product->price,
                'new_price' => $offer->new_price,
                'discount' => $offer->discount,
                'brand' => $offer->product->dealer->name ,
                'img' => $offer->product->images()->where('main_image', 1)->first()->image ,
                'link' => route('offer',$offer->product->slug),
                'featured' => $offer->product->featured ,
                'start_date' => $offer->start_date ,
                'end_date' => $offer->end_date 
            ])
        @endforeach
           
    </div>
         
</div>
@endsection

@section('script')
<script src="{{asset('public/build/assets/js/offer.js')}}"></script>
<script>
      

    
</script>
 @endsection