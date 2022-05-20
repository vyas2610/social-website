<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('clear-cache', function () {
    \Artisan::call('optimize');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Backend Routes
     */
    Route::group(['prefix' => 'admin-control', 'as' => 'admin.'], function () {
        Route::get('/login',function(){
            return view('admin.login.login');
        })->name('login');
    
    
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    
        Route::resources([
            'slider'    => 'SliderController',
            'page'      => 'PageController',
        ]);
    
        // Route::get('/create-slider' , function(){
        //         return view('admin.slider.create-slider');
        // })->name('create-slider');
    
        // Route::get('/slider' , function(){
        //     return view('admin.slider.index');
        // })->name('slider');
    
    });
    
    /**
     * Frontend Routes
     */
    
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    Route::get('/our-history', function () {
        return view('history');
    })->name('page.history');
    Route::get('/Bhawans', function () {
        return view('bhawan');
    })->name('page.bhawan');
    
    Route::get('/Prsendent-Message', function () {
        return view('presendent');
    })->name('page.presendent');
    
    Route::get('/volunteers-details', function () {
        return view('volunteers-details');
    })->name('page.volunteers-details');
    
    Route::get('/events-details', function () {
        return view('events-details');
    })->name('page.events-details');
    
    Route::get('/blog', function () {
        return view('blog');
    })->name('page.blogs');
    
    
    Route::get('/blogs-details', function () {
        return view('blogs-details');
    })->name('page.blog-details');
    
    Route::get('/FAQs', function () {
        return view('faqs');
    })->name('page.fags');
    
    
    Route::get('/Gallery', function () {
        return view('gallery');
    })->name('page.gallery');
    
    Route::get('/Contact', function () {
        return view('contact');
    })->name('page.contact');
});

