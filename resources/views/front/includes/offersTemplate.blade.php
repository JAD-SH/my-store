<div data-sos-once="true" data-sos="sos-bottom" style="--order: {{rand(1,4)}}" class="col-lg-3 col-md-4 col-5 mt-0 p-2">
    <a href="{{$link}}" class="card  premium-offer-card">
        @if($featured)
        <!-- الشريط ثلاثي الأبعاد -->
        <div class="corner-ribbon-3d">
            <div class="ribbon-main">مميز</div>
            <div class="ribbon-fold"></div>
            <div class="ribbon-shadow"></div>
        </div>
        @endif
        <!-- شريط العرض المميز -->
        <div class="premium-ribbon">
            <span>عرض حصري</span>
            <div class="ribbon-tail"></div>
        </div>
        
        <div class="product-image-container">
            <img src="{{$img}}" 
                class="product-image" 
                alt="عرض خاص على الأجهزة">
            <span class="badge badge-brand">
                {{$brand}}
            </span>
        </div>
    
        <div class="offer-content">
            @if($discount !== null)
                <!-- شارة الخصم مع تأثير 3D -->
                <div class="discount-badge-3d" data-text="{{$discount}}">
                    <div class="badge-front">{{$discount}}%</div>
                    <div class="badge-side"></div>
                </div>
            @endif
            
            <h3 class="offer-title">{{$title}}</h3>
            <p class="offer-description">{{$description}}</p>

            <!-- العد التنازلي المطور -->
            {!! getOfferCountdownData($start_date, $end_date) !!}
            
            <!-- السعر والخصم -->
            <div class="price-section">
                <span class="original-price">{{$price}}</span>
                <span class="discounted-price fs-3" data-cos="{{$new_price}}">{{$new_price}}</span>
                <span class="price-save">وفر {{$price - $new_price}}</span>
            </div>
            
            <!-- النجوم مع تأثيرات -->
            <div class="rating-stars" data-rating="4.5">
                <div class="stars-container">
                    {!! displayStars($rating) !!}
                </div>
                <span class="rating-text">{{$rating}} ({{$rating_count}} تقييم)</span>
            </div>
            
            <!-- زر الإجراء الرئيسي -->
            <button class="offer-cta-btn">
                <span>أحصل عليه</span>
                <i class="fas fa-arrow-left"></i>
            </button>
        </div>
    </a>
</div>