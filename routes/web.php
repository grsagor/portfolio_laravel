<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'home')->name('frontend.home');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/services', 'services')->name('frontend.services');
    Route::get('/portfolio', 'portfolio')->name('frontend.portfolio');
    Route::get('/portfolio/1', 'portfolioDetails')->name('frontend.portfolio.details');
    Route::get('/team', 'team')->name('frontend.team');
    Route::get('/blog', 'blog')->name('frontend.blog');
    Route::get('/blog/1', 'blogDetails')->name('frontend.blog.details');
    Route::get('/contact', 'contact')->name('frontend.contact');
});
