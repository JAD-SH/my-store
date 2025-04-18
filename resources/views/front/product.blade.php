@extends('layouts.front.body')

@section('css')
<link href="{{asset('public/build/assets/css/products.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/product.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/offers.css')}}" rel="stylesheet" />

<style>
    *{
        transition:all .3s;
    }
    .occasion {
        position:unset;
        width: 100%;
        text-align: center;
    }
    .rating-stars{
        
    display: block;
    }
</style>

@endsection

@section('content')
    @if($product->featured)
        <a href="#" data-sos-once="true" data-sos="sos-right" class="wepsite-guarantee bg-gradient-info">
            <div class=" glossy"></div>
            <i class="fa-solid fa-award fs-4  text-light "></i>
            <span class="fw-bolder fs-5 ps-3 pb-0  text-light">ضمانة الموقع</span>
        </a>
    @endif    
<div class="container-fluid row my-3 pt-2 " data-sos-once="true" data-sos="sos-top">

         <!-- قسم الصور -->
        <div class="col-lg-5 col-md-5 product-img">
            <div class="card border rounded p-3 bg-white">
                <div class="zoom-container">
                    <img id="zoomImage" src="{{$product->images->where('main_image', 1)->first()->image}}" class="img-fluid rounded zoom-image">
                    <div id="zoomLens" class="zoom-lens"></div>
                    <div id="zoomResult" class="zoom-result"></div>
                </div>
                <div class="d-flex mt-3">
                @foreach($product->images as $image)
                    <img src="{{$image->image}}" class="small-img me-2 @if($image -> main_image === 1) active @endif" onclick="changeImage(this)">
                @endforeach
                </div>
            </div>
        </div>

        <!-- قسم التفاصيل -->
        <div class="col-lg-4 col-md-5">
            <div class="card shadow-sm p-3 mb-3">
                @if($product->offer !== null)
                    <div class="premium-ribbon occasion  pb-2">
                        <span class="fs-5">
                        @if($product->occasion !== null)
                            عروض {{$product->occasion->occasion}}
                        @endif
                        </span>
                        <div class="ribbon-tail"></div>
                    </div>
                    {!! getOfferCountdownData($product->occasion->start_date, $product->occasion->end_date) !!}
                @endif
                <h2 class="fs-1 mb-0">{{$product->name}}</h2><hr class="bg-dark">
                <p class="text-muted fs-5">
                    المتجر: <a href="{{route('dealer',$product->dealer->slug)}}" class=" fw-bold fs-5">{{$product->dealer->name}}</a>
                </p>
                <h4 class="fw-bold ">
                    @if($product->offer !== null)
                    <span class="text-success fs-2" data-cos="{{$product->offer->new_price}}">{{$product->offer->new_price}}</span>
                         
                        <small class="text-muted ">
                            <del class="text-danger">
                                {{$product->price}}
                            </del>
                        </small>
                        @if($product->offer->discount !== null)
                            <span class="text-info px-2">حسم {{$product->offer->discount}} %</span>
                        @else
                            <span class="text-info px-2 bg-light mx-1">وفر {{$product->price - $product->offer->new_price}}</span>
                        @endif
                    @else
                        {{$product->price}} 
                    @endif
                </h4>
                <div class="rating-stars">
                    {!! displayStars($product->rating) !!}
                    <span class="rating-text text-info">({{$product->rating_count}} تقييم)</span>
                </div>
            </div>
            <!-- مواصفات المنتج -->
            <div class="card shadow-sm p-3 mb-3">
                <h5 class="fs-4 fw-bold"><i class="bi bi-info-circle"></i> مواصفات المنتج</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-box-seam text-primary me-2"></i> <strong class="pe-3">النوع:</strong> إلكترونيات
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-calendar-check text-success me-2"></i> <strong class="pe-3">الإنتاج:</strong> 2024 وطني
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-palette text-warning me-2"></i> <strong class="pe-3">المادة:</strong> ألياف الكربون
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-display text-danger me-2"></i> <strong class="pe-3">دقة الشاشة:</strong> 4K Ultra HD
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-display text-danger me-2"></i> <strong class="pe-3">الموديل:</strong> mine botcat
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-display text-danger me-2"></i> <strong class="pe-3">نوعية القماش:</strong> مخمل
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-display text-danger me-2"></i> <strong class="pe-3">الشركة المصنعة:</strong> nike
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-display text-danger me-2"></i> <strong class="pe-3">المقاسات:</strong> SM - MD - L - XL - 2XL - 3XL
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-phone text-info me-2"></i> <strong class="pe-3">مواصفات الهاتف:</strong> 8GB RAM - 256GB Storage
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-palette text-warning me-2"></i> <strong class="pe-3">الألوان المتوفرة:</strong> 
                        <div class="product-color">
                            <span style="--color: #a9ba13"></span>
                            <span style="--color: #fd6096"></span>
                            <span style="--color: #1a72e9"></span>
                            <span style="--color: #ffd700"></span>
                        </div>
                    </li>
                </ul>
            </div>
            
             
        </div>

        <!-- قسم سياسة الشراء -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card shadow-sm p-3 mb-3">            
                <h5 class="fs-4 fw-bold">سياسة الشراء</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <strong class="pe-3">الشحن:</strong> يمكن شحنه لجميع المحافظات
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <strong class="pe-3">تكاليف الشحن:</strong> تكلفة الشحن مضّمنة مع سعر المنتج
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <strong class="pe-3">استبدال المنتج:</strong> يمكن استبدال المنتج اذا كان نفس مواصفات التسليم فقط
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <strong class="pe-3">صلاحية الاسترداد:</strong> 10 ايام من تاريخ الاستلام
                    </li>
                    <li class="list-group-item   align-items-center">
                        <div>
                            <strong class="pe-3">استرداد الاموال:</strong> يمكن استرداد الاموال ضمن الشروط التالية
                        </div>
                        <ul class="ps-3">
                            <li>ان يكون المنتج غير مستعمل وضمن نفس ظروف الاستلام</li>
                            <li>خصم تكاليف الشحن من السعر المدفوع</li>
                        </ul>
                    </li>
                    <li class="list-group-item d-flex align-items-center mt-2" style="background-color:#ff000045;">
                        <strong class="pe-3 text-danger fs-5">تحذير:</strong> 
                        <span class="fs-6">اذا كان المنتج الذي تم ارساله الى البائع لا يطابق مواصفاته الاولية بالكامل فمن حق البائع ان لايقوم باسترداد الاموال إليك ولن تتمكن بعدها من استرداد اموالك لذلك كن حريص جدا في الحفاظ على المنتج .</span>
                    </li>
                </ul>
            </div>
            
            

            <button class="btn btn-primary m-1">إضافة إلى السلة 🛒</button>
            <button class="btn btn-dark m-1">شراء الآن 💳</button>
            <button class="btn btn-danger pt-1 pb-2 fs-5 m-1">أبلغ إدارة الموقع عن البائع او المنتج</button>
        </div>

        <!-- التعليق المفضل -->
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="comment-box card p-3 m-2 rounded-4" data-sos-once="true" data-sos="sos-left" >
                    <div>
                        <span class="fw-bold fs-5">أحمد محمد</span> <span class="text-muted">- منذ يومين</span>
                    </div>
                    
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="fs-5">منتج رائع بجودة عالية! أنصح الجميع بشرائه.</p>
                </div>
                <div class=" my-3 ">
                    <a href="#comments" class="btn btn-success pt-1 pb-2 fs-5"> المزيد من التعليقات</a>
                </div>
            </div>
        </div>


          @if($product->similarProducts()?->count())
            <!-- منتجات مشابهة -->
            <div class="row mt-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fs-2 text-info">منتجات مشابهة</h2> 
                </div>
                <div class="gallery">
                    @foreach($product->similarProducts() as $similarProduct)
                        <a href="{{route('product',$similarProduct->slug)}}">
                            @if($similarProduct->featured)
                                <!-- الشريط ثلاثي الأبعاد -->
                                <div class="corner-ribbon-3d">
                                    <div class="ribbon-main">عرض</div>
                                    <div class="ribbon-fold"></div>
                                    <div class="ribbon-shadow"></div>
                                </div>
                            @endif
                            <span class="badge badge-stars">
                                <div class="rating mb-2">
                                    {!! displayStars($similarProduct->rating)!!}
                                </div>
                            </span>
                            <img src="{{$similarProduct->images()->where('main_image', 1)->first()->image}}" alt="صورة 2">
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        @if($offers !== null)
            <!-- العروض الخاصة -->
            <section class="special-offers mb-5 py-5 bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="fs-2 text-info">العروض الخاصة</h2>
                        @if($offers->count() > 0)
                            <div class="countdown fs -5 fw-bold">
                                <a href="#" class="btn btn-danger pb-2 fs-5 m-1">المزيد من العروض</a>
                            </div>
                        @endif
                    </div>
                    @if($offers->count() > 0)
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
                    @else
                        <span class="fs-4 tect-info">لا يوجد عروض خاصة بعد</span>
                    @endif
                </div>
            </section>
        @endif

        @if($fav_product?->count())
            <!-- منتجات من نفس المتجر -->
            <div class="row mt-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fs-2 text-info">منتجات من نفس المتجر</h2>
                    <div class="countdown fs -5 fw-bold">
                        <a href="#" class="btn btn-danger pb-2 fs-5 m-1">المزيد من منتجات المتجر</a>
                    </div>
                </div>
                <div class="gallery">
                    @foreach($fav_product as $product)
                        <a href="{{route('product',$product->slug)}}">
                            @if($product->featured)
                                <!-- الشريط ثلاثي الأبعاد -->
                                <div class="corner-ribbon-3d">
                                    <div class="ribbon-main">عرض</div>
                                    <div class="ribbon-fold"></div>
                                    <div class="ribbon-shadow"></div>
                                </div>
                            @endif
                            <span class="badge badge-stars">
                                <div class="rating mb-2">
                                    {!! displayStars($product->rating)!!}
                                </div>
                            </span>
                            <img src="{{$product->images->where('main_image', 1)->first()->image}}" alt="صورة 2">
                        </a>
                    @endforeach
                </div>
            </div>
        @endif


        <!-- قسم التعليقات -->
        <div id="comments" class="row mt-5">
            <div class="col-md-8">
                <h2 class="fs-3">تعليقات المستخدمين</h2>
                <div class=" my-3 ">
                    <button class="btn btn-info pt-1 pb-2 fs-5"> + أضف تعليق عن المنتج</button>
                </div>
                <div class="comment-box card p-3 m-2 my-3 rounded-4" data-sos-once="true" data-sos="sos-left" >
                    <div>
                        <span class="fw-bold fs-5">أحمد محمد</span> <span class="text-muted">- منذ يومين</span>
                    </div>
                    
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="fs-5">منتج رائع بجودة عالية! أنصح الجميع بشرائه.</p>
                </div>
                <div class="comment-box card p-3 m-2 my-3 rounded-4" data-sos-once="true" data-sos="sos-left" >
                    <div>
                        <span class="fw-bold fs-5">أحمد محمد</span> <span class="text-muted">- منذ يومين</span>
                    </div>
                    
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="fs-5">منتج رائع بجودة عالية! أنصح الجميع بشرائه.</p>
                </div>
                <div class="comment-box card p-3 m-2 my-3 rounded-4" data-sos-once="true" data-sos="sos-left" >
                    <div>
                        <span class="fw-bold fs-5">أحمد محمد</span> <span class="text-muted">- منذ يومين</span>
                    </div>
                    
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="fs-5">منتج رائع بجودة عالية! أنصح الجميع بشرائه.</p>
                </div>
                <div class="comment-box card p-3 m-2 my-3 rounded-4" data-sos-once="true" data-sos="sos-left" >
                    <div>
                        <span class="fw-bold fs-5">أحمد محمد</span> <span class="text-muted">- منذ يومين</span>
                    </div>
                    
                    <div class="rating-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="fs-5">منتج رائع بجودة عالية! أنصح الجميع بشرائه.</p>
                </div>
            </div>
        </div>
</div>
@endsection

@section('script')
<script>

    function changeImage(element) {
        let mainImage = document.getElementById("zoomImage");
        mainImage.src = element.src;
        
        // إزالة التحديد من جميع الصور المصغرة
        document.querySelectorAll(".small-img").forEach(img => img.classList.remove("active"));
        
        // إضافة التحديد للصورة المختارة
        element.classList.add("active");
    }
    document.addEventListener('DOMContentLoaded', function() {
        const image = document.getElementById('zoomImage');
        const lens = document.getElementById('zoomLens');
        const zoomResult = document.getElementById('zoomResult');
        const zoomFactor = 3; // نسبة التكبير

        image.addEventListener('mouseenter', function() {
            lens.style.display = 'block';
            zoomResult.style.display = 'block';
            zoomResult.style.backgroundImage = `url('${image.src}')`;
            zoomResult.style.backgroundSize = `${image.width * zoomFactor}px ${image.height * zoomFactor}px`;
        });

        image.addEventListener('mouseleave', function() {
            lens.style.display = 'none';
            zoomResult.style.display = 'none';
        });

        image.addEventListener('mousemove', function(e) {
            const rect = image.getBoundingClientRect();
            const lensSize = lens.offsetWidth / 2;
            let x = e.clientX - rect.left - lensSize;
            let y = e.clientY - rect.top - lensSize;

            // التأكد من أن العدسة لا تخرج عن حدود الصورة
            x = Math.max(0, Math.min(x, image.width - lens.offsetWidth));
            y = Math.max(0, Math.min(y, image.height - lens.offsetHeight));

            lens.style.left = `${x}px`;
            lens.style.top = `${y}px`;

            // ضبط الخلفية في العدسة
            zoomResult.style.backgroundPosition = `-${x * zoomFactor}px -${y * zoomFactor}px`;
        });
    });
</script>
    @if($product->offer !== null)
        <script src="{{asset('public/build/assets/js/offer.js')}}"></script>
    @endif
@endsection