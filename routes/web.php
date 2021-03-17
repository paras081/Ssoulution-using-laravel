<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
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
//Route::get('/',[TestController::class, 'index']);
//
Route::get('/',[TechnologyController::class,'index']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/technology', function () {
    return view('technology');
});
Route::get('/newsfeed', function () {
    return view('newsfeed');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contactus', function () {
    return view('contact');
});
Route::get('/career', function () {
    return view('career');
});
//admin side routes
Route::get('/insertTech',[TechnologyController::class,'insertTech'])->name('insertTechnology');
Route::post('/insertTech',[TechnologyController::class,'storeTech'])->name('storeTechnology');
//routes for portfolio page
Route::get('/insertPortfolio',[PortfolioController::class,'insertPortfolio'])->name('insertPortfolio');
Route::post('/insertPortfolio',[PortfolioController::class,'storePortfolio'])->name('storePortfolio');
Route::get('portfolio/{id}',[
    'as'=>'dynamicPortfolioModal',
    'uses'=> 'PortfolioController@loadPortfolioModal'
]);
// routes for insert contact us data
Route::post('/contactus',[ContactController::class,'storeContact'])->name('storeContact');
Route::get('/viewContactusMsg',[ContactController::class,'viewContactusMsg'])->name('viewContactusMsg');
//route to delete contact us data
Route::delete('deleteContactus/{id}',[ContactController::class,'delete'])->name('deleteContactus');
