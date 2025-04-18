@extends('layouts.shared.body')

@section('main_page_head')
  <!-- head -->
  @include('layouts.front.head')
  @yield('css')
  <!-- head -->
    
  <style>
    
  </style>
@endsection


@section('main_page_body')

  <!-- sidebar -->
  @include('front.includes.sidebar')
  <!-- sidebar -->

  <!-- Navbar -->
  @include('front.includes.navbar')
  <!-- Navbar -->

  <!-- content -->
  @yield('content')
  <!-- content -->

  <!-- footer -->
  @include('front.includes.footer')
  <!-- footer -->
  <button class="btn btn-primary" onclick="showNotification('warning')">عرض تحذير</button>
    <button class="btn btn-info" onclick="showNotification('info')">عرض معلومات</button>
    <button class="btn btn-secondary" onclick="showNotification('question')">عرض سؤال</button>
    <button class="btn btn-success" onclick="showNotification('success')">عرض نجاح</button>
    <button class="btn btn-danger" onclick="showNotification('error')">عرض خطأ</button>
    <button class="btn btn-light" onclick="showNotification('loading')">عرض تحميل</button>
 
@endsection


@section('main_page_script')

  @include('layouts.front.js')
  @yield('script')

@endsection
