@extends('layouts.front.body')

@section('css')

<link href="{{asset('public/build/assets/css/dealer-page.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/products.css')}}" rel="stylesheet" />
<style>
         

</style>

@endsection

@section('content')
 
    @include('front.includes.dealer-photo',['title' =>'amjad', 'description' =>'shaar'])
 

         
    <a href="#" data-sos-once="true" data-sos="sos-right" class="wepsite-guarantee bg-gradient-info">
        <div class=" glossy"></div>
        <i class="fa-solid fa-award fs-4  text-light "></i>
        <span class="fw-bolder fs-5 ps-3 pb-0  text-light">ضمانة الموقع</span>
    </a>
   
    <div class="container products">
    <div class="row g-3">
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
            <span class="badge badge-stars"><div class="rating mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                </div></span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
            <span class="badge badge-stars"><div class="rating mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                </div></span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
                <span class="badge badge-stars"><div class="rating mb-2">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    </div>
                </span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
            <span class="badge badge-stars"><div class="rating mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                </div></span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
            <span class="badge badge-stars"><div class="rating mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                </div></span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
            <span class="badge badge-stars"><div class="rating mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                </div></span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
        <div data-sos-once="true" data-sos="sos-bottom" style="--order: 2" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
            <a href="#" class="card product-card">
            <span class="badge badge-stars"><div class="rating mb-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                </div></span>
                <img src="{{asset('public/build/assets/img/5.jpg')}}" class="p-2 card-img-top" alt="كيبورد">
                <div class="card-body text-center">
                <h5 class="card-title fs-4 text-secondary fw-blod">ماوس لاسلكي</h5>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder">200,000ل.س</span>
                    <del class="fw-bold old-price">225,000ل.س</del>
                </div>
                <button class="btn btn-info ">
                    <i class="fas fa-cart-plus me-2"></i>أضف إلى السلة
                </button>
                </div>
            </a>
        </div>
    </div>
    <section class="special-offers mb-5 py-2 bg-light">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h2 class="fs-2 text-info">العروض الخاصة</h2>
             </div>
            <div class="row justify-content-center">
                 
                

                <div class="my-3 col-lg-3 col-md-4 col-6 text-center parent-flashy-offer" style="--order: 1" data-sos-once="true" data-sos="sos-zoom-in">
                    <a herf="#" class="card  text-center flashy-offer-container">
                        <div class="flashy-offer-card">
                            
                            <!-- صورة المنتج -->
                            <div class="product-image-container">
                                <img src="{{asset('public/build/assets/img/5.jpg')}}" 
                                    class="product-image" 
                                    alt="عرض خاص على الأجهزة">
                                <div class="image-overlay"></div>
                            </div>
                            
                            <!-- محتوى العرض -->
                            <div class="offer-content">
                                <div class="discount-badge">50%</div>
                                
                                <h3 class="offer-title">خصم كبير على الأجهزة الذكية</h3>
                                <p class="offer-description">أقوى العروض على أحدث الأجهزة الإلكترونية لمدة محدودة</p>
                                
                                <!-- العد التنازلي -->
                                <div class="countdown-wrapper">
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="days">05</span>
                                        <span class="countdown-label">أيام</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="hours">23</span>
                                        <span class="countdown-label">ساعات</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="minutes">59</span>
                                        <span class="countdown-label">دقائق</span>
                                    </div>
                                </div>
                                
                                <!-- النجوم -->
                                <div class="rating-stars">
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">(4.9 تقييم)</span>
                                </div>
                                
                                <!-- زر الشراء -->
                                <button class="btn btn-info">
                                    <span class="text-white">احصل على العرض الآن</span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
 
                <div class="mt-3 col-lg-3 col-md-4 col-6 text-center parent-flashy-offer" style="--order: 2" data-sos-once="true" data-sos="sos-zoom-in">
                    <a herf="#" class="card  text-center flashy-offer-container">
                        <div class="flashy-offer-card">
                            
                            <!-- صورة المنتج -->
                            <div class="product-image-container">
                                <img src="{{asset('public/build/assets/img/5.jpg')}}" 
                                    class="product-image" 
                                    alt="عرض خاص على الأجهزة">
                                <div class="image-overlay"></div>
                            </div>
                            
                            <!-- محتوى العرض -->
                            <div class="offer-content">
                                <div class="discount-badge">50%</div>
                                
                                <h3 class="offer-title">خصم كبير على الأجهزة الذكية</h3>
                                <p class="offer-description">أقوى العروض على أحدث الأجهزة الإلكترونية لمدة محدودة</p>
                                
                                <!-- العد التنازلي -->
                                <div class="countdown-wrapper">
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="days">05</span>
                                        <span class="countdown-label">أيام</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="hours">23</span>
                                        <span class="countdown-label">ساعات</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="minutes">59</span>
                                        <span class="countdown-label">دقائق</span>
                                    </div>
                                </div>
                                
                                <!-- النجوم -->
                                <div class="rating-stars">
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">(4.9 تقييم)</span>
                                </div>
                                
                                <!-- زر الشراء -->
                                <button class="btn btn-info">
                                    <span class="text-white">احصل على العرض الآن</span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
 
                <div class="mt-3 col-lg-3 col-md-4 col-6 text-center parent-flashy-offer" style="--order: 3" data-sos-once="true" data-sos="sos-zoom-in">
                    <a herf="#" class="card  text-center flashy-offer-container">
                        <div class="flashy-offer-card">
                            
                            <!-- صورة المنتج -->
                            <div class="product-image-container">
                                <img src="{{asset('public/build/assets/img/5.jpg')}}" 
                                    class="product-image" 
                                    alt="عرض خاص على الأجهزة">
                                <div class="image-overlay"></div>
                            </div>
                            
                            <!-- محتوى العرض -->
                            <div class="offer-content">
                                <div class="discount-badge">50%</div>
                                
                                <h3 class="offer-title">خصم كبير على الأجهزة الذكية</h3>
                                <p class="offer-description">أقوى العروض على أحدث الأجهزة الإلكترونية لمدة محدودة</p>
                                
                                <!-- العد التنازلي -->
                                <div class="countdown-wrapper">
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="days">05</span>
                                        <span class="countdown-label">أيام</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="hours">23</span>
                                        <span class="countdown-label">ساعات</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="minutes">59</span>
                                        <span class="countdown-label">دقائق</span>
                                    </div>
                                </div>
                                
                                <!-- النجوم -->
                                <div class="rating-stars">
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">(4.9 تقييم)</span>
                                </div>
                                
                                <!-- زر الشراء -->
                                <button class="btn btn-info">
                                    <span class="text-white">احصل على العرض الآن</span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
 
                <div class="mt-3 col-lg-3 col-md-4 col-6 text-center parent-flashy-offer" style="--order: 4" data-sos-once="true" data-sos="sos-zoom-in">
                    <a herf="#" class="card  text-center flashy-offer-container">
                        <div class="flashy-offer-card">
                            
                            <!-- صورة المنتج -->
                            <div class="product-image-container">
                                <img src="{{asset('public/build/assets/img/5.jpg')}}" 
                                    class="product-image" 
                                    alt="عرض خاص على الأجهزة">
                                <div class="image-overlay"></div>
                            </div>
                            
                            <!-- محتوى العرض -->
                            <div class="offer-content">
                                <div class="discount-badge">50%</div>
                                
                                <h3 class="offer-title">خصم كبير على الأجهزة الذكية</h3>
                                <p class="offer-description">أقوى العروض على أحدث الأجهزة الإلكترونية لمدة محدودة</p>
                                
                                <!-- العد التنازلي -->
                                <div class="countdown-wrapper">
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="days">05</span>
                                        <span class="countdown-label">أيام</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="hours">23</span>
                                        <span class="countdown-label">ساعات</span>
                                    </div>
                                    <div class="countdown-box">
                                        <span class="countdown-number" id="minutes">59</span>
                                        <span class="countdown-label">دقائق</span>
                                    </div>
                                </div>
                                
                                <!-- النجوم -->
                                <div class="rating-stars">
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">(4.9 تقييم)</span>
                                </div>
                                
                                <!-- زر الشراء -->
                                <button class="btn btn-info">
                                    <span class="text-white">احصل على العرض الآن</span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
 
                
            </div>
        </div>
    </section>
    </div>
    @include('front.includes.likes-views', 
       ['isliked' => 'lesson IsLiked' ,
        'likedroute' => 'hello' ,
        'color' => 'danger' ,
        'name' => 'المتجر',
        'likes' => '66','views' => '55'])

    <!-- قسم آراء العملاء -->
    <section class="testimonials mb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h2 class="fs-2 text-info">آراء العملاء</h2>
             </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{asset('public/build/assets/img/7.jpg')}}" class="rounded-circle mb-3 " alt="عميل">
                            <h5 class="card-title">أحمد محمد</h5>
                            <div class="rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"تجربة تسوق رائعة، المنتجات ذات جودة عالية والتوصيل سريع جداً. أنصح بالتعامل مع هذا المتجر."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{asset('public/build/assets/img/1.jpg')}}" class="rounded-circle mb-3" alt="عميل">
                            <h5 class="card-title">سارة عبدالله</h5>
                            <div class="rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="card-text">"خدمة العملاء ممتازة، ساعدوني في اختيار المنتج المناسب وسعرها كان مناسباً جداً."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{asset('public/build/assets/img/1.jpg')}}" class="rounded-circle mb-3" alt="عميل">
                            <h5 class="card-title">خالد علي</h5>
                            <div class="rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="card-text">"المنتجات كما هي موصوفة تماماً، والتغليف كان جيداً. شكراً لكم على الخدمة المميزة."</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-info  fs-5 pt-2">
                <i class="fas fa-plus me-2  fs-5"></i>أضف رأيك عن المتجر
            </button>
        </div>
    </section>
 
    <!-- الفوتر -->
    <footer class="dealer-footer footer bg-gradient-dark p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3 fs-4 fw-bold">عن المتجر</h5>
                    <p class="fs-6">متجرنا الإلكتروني يوفر لك أفضل المنتجات بأفضل الأسعار. نسعى دائماً لتقديم تجربة تسوق ممتعة وسهلة لعملائنا الكرام.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="social-icon"><i class="fab fs-5 fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fs-5 fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fs-5 fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fs-5 fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3">روابط سريعة</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">الرئيسية</a></li>
                        <li class="mb-2"><a href="#" class="text-white">المنتجات</a></li>
                        <li class="mb-2"><a href="#" class="text-white">العروض</a></li>
                        <li class="mb-2"><a href="#" class="text-white">من نحن</a></li>
                        <li class="mb-2"><a href="#" class="text-white">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">خدمة العملاء</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">حسابي</a></li>
                        <li class="mb-2"><a href="#" class="text-white">تتبع الطلب</a></li>
                        <li class="mb-2"><a href="#" class="text-white">سياسة الإرجاع</a></li>
                        <li class="mb-2"><a href="#" class="text-white">الأسئلة الشائعة</a></li>
                        <li class="mb-2"><a href="#" class="text-white">الشروط والأحكام</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">اتصل بنا</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> الرياض، المملكة العربية السعودية</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +966 12 345 6789</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@store.com</li>
                        <li class="mb-2"><i class="fas fa-clock me-2"></i> الأحد - الخميس: 9ص - 5م</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">جميع الحقوق محفوضة بضمانة الموقع .</p>
                </div>
            </div>
        </div>
    </footer>

@endsection

@section('script')
<script>
        


    function create_ele_img(){
        let items_width = 112;
        let items_border = 8;
        let SLPosition = -1;
        let WIWidth = Math.ceil(window.innerWidth/100) + 1;
        for (let i = 0; i < 2; i++) {
            for (let y = 1; y < WIWidth; y++) {
                let first = document.createElement('div');
                $(first).addClass('first')/*.attr('style',`animation-duration:${Math.ceil(Math.random()*10)}s`)*/;
                let second = document.createElement('div');
                $(second).addClass('second');
                let third = document.createElement('div');
                $(third).addClass('third');

                let items = document.createElement('div');
                $(items).addClass('items').append(first, second, third);
                if(i == 0){
                $(items).css({
                    'left' : `${(y * items_width) - (y * items_border)}px`
                });
                }else{
                $(items).css({
                    'left' : `${SLPosition * 52}px`,
                    'top' : '90px'
                });
                SLPosition += 2;
                }
                $('.container-items').append(items);            
            }
        }
    }
    create_ele_img();


    window.addEventListener('scroll', function() {
     
    
});
    </script>
@endsection