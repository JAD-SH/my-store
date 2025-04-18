<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\DealerController;
use App\Http\Controllers\front\OfferController;
use App\Http\Controllers\front\ProductController;



 
  #################### Home ####################
  Route::get('/', [HomeController::class, 'index'])->name('home');
  #################### Home ####################

  #################### Offers ####################
  Route::get('/offers', [OfferController::class, 'offers'])->name('offers');
  #################### Offers ####################

  #################### Products ####################
  Route::get('/products', [ProductController::class, 'products'])->name('products');
  Route::get('/products/{product_slug}', [ProductController::class, 'product'])->name('product');
  #################### Products ####################

  #################### Dealers ####################
  Route::get('/dealers', [DealerController::class, 'dealers'])->name('dealers');
  Route::get('/dealers/{product_slug}', [DealerController::class, 'dealer'])->name('dealer');
  #################### Dealers ####################
