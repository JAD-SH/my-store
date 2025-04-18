<?php
use Carbon\Carbon;

function Site(){
    return \App\Models\Site::first();
}
function MainCategories(){
    return \App\Models\MainCategory::active()->selection()->get();
}
function Dealers(){
    return \App\Models\Dealer::get();
}
function uploadFile($file,$folder){
    $file->store('/', $folder);
    $filename = $file->hashName();
    $path =  $folder . '/' . $filename;
    return $path;
}
function displayStars($rating){
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
    $emptyStars = 5 - $fullStars - $halfStar;
    $starsHtml = '';

    for ($i=0; $i < $fullStars; $i++) { 
        $starsHtml .= '<i class="fas fa-star"></i>';
    }
    if ($halfStar ) {
        $starsHtml .= '<i class="fas fa-star-half-alt"></i>';
    }
    for ($i=0; $i < $emptyStars; $i++) { 
        $starsHtml .= '<i class="far fa-star"></i>';
    }
    return $starsHtml;
}
 
function getOfferCountdownData($startTime, $endTime){
    
    $start = Carbon::parse($startTime);
    $end = Carbon::parse($endTime);
    $now = Carbon::now();

    if ($now->lt($start)) {
        // العرض لم يبدأ بعد
        $target = $start;
        $label = 'سيبدأ العرض بعد';
    } elseif ($now->between($start, $end)) {
        // العرض جاري الآن
        $target = $end;
        $label = 'ينتهي العرض بعد';
    } else {
        // العرض منتهي
        return '<div class="countdown-expired">انتهى العرض!</div>';
    }

    $diff = $now->diff($target);

    $days = str_pad($diff->d, 2, '0', STR_PAD_LEFT);
    $hours = str_pad($diff->h, 2, '0', STR_PAD_LEFT);
    $minutes = str_pad($diff->i, 2, '0', STR_PAD_LEFT);
    $targetIso = $target->toIso8601String();

    return <<<HTML
    <div class="countdown-box">
        <p class="countdown-label-text fw-bold">{$label}</p>
        <div class="countdown-wrapper" data-end-time="{$targetIso}">
            <div class="countdown-segment">
                <span class="countdown-number" id="days">{$days}</span>
                <span class="countdown-label">أيام</span>
            </div>
            <div class="countdown-separator">:</div>
            <div class="countdown-segment">
                <span class="countdown-number" id="hours">{$hours}</span>
                <span class="countdown-label">ساعات</span>
            </div>
            <div class="countdown-separator">:</div>
            <div class="countdown-segment">
                <span class="countdown-number pulse" id="minutes">{$minutes}</span>
                <span class="countdown-label">دقائق</span>
            </div>
        </div>
    </div>
    HTML;
}