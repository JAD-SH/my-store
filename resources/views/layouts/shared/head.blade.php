<link href="{{asset('public/build/assets/bootstrap/bootstrapRTL.css')}}" rel="stylesheet" />
<!-- أيقونات Bootstrap -->
<link href="{{asset('public/build/assets/bootstrap/bootstrap-icons.css')}}" rel="stylesheet" />



<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('public/build/assets/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/build/assets/fontawesome/css/all.min.css')}}">

<!-- custome style -->
<link href="{{asset('public/build/assets/css/root.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/style.css')}}" rel="stylesheet" />
<link href="{{asset('public/build/assets/css/animation-on-scroll.css')}}" rel="stylesheet" />
<!-- custome style -->

 
<style>
    .scroll-button {
        user-select: none;
        height: 101%;
        position: absolute;
        top: 49%;
        transform: translateY(-50%);
        border: none;
        padding: 0 10px;
        cursor: pointer;
        z-index: 1;
        line-height: 125%;
        font-size: 2rem!important;
        background-color:#264653;
    }
    .scroll-button.left {
        box-shadow: 5px -1px 5px #264653 !important;
        left: 0;
    }
    
    .scroll-button.right {
        box-shadow: -5px -1px 5px #264653 !important;
        right: 0;
    }
    .scroll-button.hidden {
        display: none;
    }
    .navbar-free{
        top: 10px !important;
        margin: 0 10px !important;
        border-radius: 1rem !important;
    }
    .navbar{
        transition:all .4s;
    }
    .navbar.card{
        border-radius: unset;
    }
</style>