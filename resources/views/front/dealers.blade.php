@extends('layouts.front.body')

@section('css')

<style>
          .store-card {
            transition: transform 0.3s ease;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            background-color: #fff;
        }
        
        .store-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .store-name {
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .store-rank {
            background-color: #f8f9fa;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        .rating {
            color: #ffc107;
            font-size: 1.1rem;
        }
        
        .rating-count {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        /**/
        /* تنسيق متقدم لاسم المتجر */
.store-name {
    position: relative;
  }

.store-name::after {
    content: "";
    position: absolute;
    right: 0;
    bottom: -5px;
    width: 50%;
    height: 3px;
    background: linear-gradient(to right, #3498db, #2ecc71);
    border-radius: 3px;
}

 .store-card::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 50px 50px 0;
    border-color: transparent #2ecc71 transparent transparent;
    border-radius: 0 0 0 5px;
}
 
.store-card {
    position: relative;
    overflow: hidden;  
}
 
.badge-stars i{
    color:yellow;
}

.store-num{
    z-index: 2;
    position: relative;
}

/** */
 
/* شريط "مميز" */
.featured-badge {
    position: absolute;
    top: 6px;
    left: -21px;
    background: #ff4757;
    color: white;
    padding: 3px 30px;
    font-size: 12px;
    font-weight: bold;
    transform: rotate(-45deg);
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    text-align: center;
    animation: pulse 1.5s infinite;
}
 
@keyframes pulse {
    0% { scale:1; }
    50% { scale:1.3; }
    100% { scale:1; }
}

 
    </style> 
@endsection

@section('content')
<div class="container py-5">
        
 
@include('front.includes.filters',['catName'=>'اسم القسم','catDescription'=>'هنا وصف عن القسم'])

        

        <div class="row">
            <!-- المتجر 1 -->
            <a href="#" class="col-md-4 col-sm-6">
                <div class="store-card featured">
                    <div class="fw-bold fs-5 store-num">#1</div>
                    <div class="store-name fs-4">متجر الأصيل للإلكترونيات</div>
                    <p class="fs-6 fw-bold text-secondary">- ملابس رجالية</p>
                    <p class="fs-6">هذا المتجر يبيع الاشاء التي لا يمكن بيعها</p>
                    <span class="badge badge-stars">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-count">(187 تقييم)</span>
                        </div>
                    </span>
                </div>
            </a>
             
            <a href="#" class="col-md-4 col-sm-6">
                <div class="store-card featured">
                    <div class="fw-bold fs-5 store-num">#1</div>
                    <div class="store-name fs-4">متجر الأصيل للإلكترونيات</div>
                    <p class="fs-6 fw-bold text-secondary">- ملابس رجالية</p>
                    <p class="fs-6">هذا المتجر يبيع الاشاء التي لا يمكن بيعها</p>
                    <span class="badge badge-stars">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-count">(187 تقييم)</span>
                        </div>
                    </span>
                </div>
            </a>
             
            <a href="#" class="col-md-4 col-sm-6">
                <div class="store-card featured">
                <div class="featured-badge text-light">مميز</div>
                    <div class="fw-bold fs-5 store-num">#1</div>
                    <div class="store-name fs-4">متجر الأصيل للإلكترونيات</div>
                    <p class="fs-6 fw-bold text-secondary">- ملابس رجالية</p>
                    <p class="fs-6">هذا المتجر يبيع الاشاء التي لا يمكن بيعها</p>
                    <span class="badge badge-stars">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-count">(187 تقييم)</span>
                        </div>
                    </span>
                </div>
            </a>
             
            <a href="#" class="col-md-4 col-sm-6">
                <div class="store-card featured">
                    <div class="fw-bold fs-5 store-num">#1</div>
                    <div class="store-name fs-4">متجر الأصيل للإلكترونيات</div>
                    <p class="fs-6 fw-bold text-secondary">- ملابس رجالية</p>
                    <p class="fs-6">هذا المتجر يبيع الاشاء التي لا يمكن بيعها</p>
                    <span class="badge badge-stars">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="rating-count">(187 تقييم)</span>
                        </div>
                    </span>
                </div>
            </a>
             
        </div>
    </div>
  
 
@endsection

@section('script')
<script>
         
    </script>
@endsection