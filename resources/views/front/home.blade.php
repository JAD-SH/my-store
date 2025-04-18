@extends('layouts.front.body')

@section('css')
<link href="{{asset('public/build/assets/css/home.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/products.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/offers.css')}}" rel="stylesheet" />
<style>
    
   
</style>
 @endsection

@section('content')
    @if($main_dealers?->count())
    <div id="carouselExample" class="carousel slide p-5 m-4" data-bs-ride="carousel" data-bs-interval="3000">
        <!-- مؤشرات الصور (الدوائر) -->
        <div class="carousel-indicators">
            @foreach($main_dealers as $key => $main_dealer)
                <button type="button" 
                        data-bs-target="#carouselExample" 
                        data-bs-slide-to="{{ $key }}" 
                        class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="{{ $loop->first ? 'true' : 'false' }}"
                        aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        
        <div class="carousel-inner carousel-offer">
            @foreach($main_dealers as $main_dealer)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <a href="@if($main_dealer->product_id !== null ) {{route('product',$main_dealer->product->slug)}} @else {{route('dealer',$main_dealer->dealer->slug)}} @endif">
                        <img src="{{$main_dealer->image}}" class="d-block w-100" alt="عرض خاص">
                    </a>
                </div>
            @endforeach
        </div>
        
        <span class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </span>
        <span class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </span>
    </div>
    @endif

    @if($products?->count())
        <div class="container">
            <div class="row g-3">
                @foreach($products as $product)
                    @include('front.includes.productsTemplate', [
                        'brand' => $product->dealer->name ,
                        'img' => $product->images()->where('main_image', 1)->first()->image ,
                        'name' => $product->name ,
                        'price' => $product->price,
                        'featured' => $product->featured ,
                        'link' => route('product',$product->slug),
                        'rating' => $product->rating
                    ])
                @endforeach
            </div>    
        </div>
    @else
        <span class="fs-2 text-center d-block pt-4 text-info fw-bold">لا يوجد منتجات بعد</span><br>
    @endif

    @if($offers?->count())
        <div class="mb-5 py-5 bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fs-2 text-info">العروض الخاصة</h2>
                    <div class="countdown fs -5 fw-bold">
                        <a href="{{route('offers')}}" class="btn btn-danger pb-2 fs-5 m-1">المزيد من العروض</a>
                    </div>
                </div>
                <div class="row justify-content-center">
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
                            'link' => route('product',$offer->product->slug),
                            'featured' => $offer->product->featured ,
                            'start_date' => $offer->start_date ,
                            'end_date' => $offer->end_date 
                        ])
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <span class="fs-2 text-center d-block pt-4 text-info fw-bold">لا يوجد عروض خاصة بعد</span><br>
    @endif
 

@endsection

@section('script')
<script src="{{asset('public/build/assets/js/offer.js')}}"></script>
<script>
      

    
</script>
 @endsection

 