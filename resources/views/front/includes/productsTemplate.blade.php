<div data-sos-once="true" data-sos="sos-bottom" style="--order: {{rand(1,4)}}" class="col-lg-3 col-md-4 col-6 mt-0 p-2">
    <a href="{{$link}}" class="card product-card">
        @if($featured)
        <!-- الشريط ثلاثي الأبعاد -->
        <div class="corner-ribbon-3d">
            <div class="ribbon-main">مميز</div>
            <div class="ribbon-fold"></div>
            <div class="ribbon-shadow"></div>
        </div>
        @endif
        <span class="badge badge-stars">
            <div class="rating mb-2">
                {!! displayStars($rating) !!}
            </div>
        </span>
        <span class="badge badge-brand fw-bold fs-5 text-info">{{$brand}}</span>
        <img src="{{$img}}" class="card-img-top" alt="كيبورد">
        <div class="card-body text-center">
            <h5 class="card-title fs-4 text-secondary fw-blod">{{$name}}</h5>
            <div class="price card-text text-success fw-bold mb-2 fs-4 fw-bolder" data-cos="{{$price}}">{{$price}}</div>
        </div>
    </a>
</div>




