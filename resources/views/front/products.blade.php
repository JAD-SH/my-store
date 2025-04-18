@extends('layouts.front.body')

@section('css')

<link href="{{asset('public/build/assets/css/products.css')}}" rel="stylesheet" />


 <style>
       
       
        
    
</style>

@endsection


@section('content')
    
<div class="container  py-5">

@include('front.includes.filters',['catName'=>'اسم القسم','catDescription'=>'هنا وصف عن القسم'])

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

@endsection


@section('script')
<script> 

</script>
@endsection