<?php

namespace App\Http\Controllers;
use App\Models\Material_prices;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ProductController;




Route::get('/login', [Authorization::class, 'login'] ) -> name('login');

Route::post('/addSpecification', [CalculatorController::class, 'addSpecification'])->name('addSpecification');

Route::post('/updatePrices', [CalculatorController::class, 'updatePrices'])->name('updatePrices');

Route::get('/editPrices', function () {
    $material_prices = DB::table('products')
    ->select('name', 'price')
    ->get()
    ->pluck('price', 'name') 
    ->toArray();
    return view('editPrices', compact( 'material_prices'));
})->name('editPrices');


Route::get('/specification', function () {
    return view('specification'); 
})->name('specification');

Route::get('/', function () {
    $user = Auth::user(); 
    return view('home', compact('user')); 
})->name('home');


Route::get('/edit', function () {
    $user = Auth::user(); 
    return view('edit_settings', compact('user')); 
})->name('edit');

Route::get('/modularhouses', function () {
    $user = Auth::user(); 
    return view('modularhouses', compact('user')); 
})->name('modularhouses');


Route::get('/store', [ProductController::class, 'store'])->name('store');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart');
Route::post('/cart/{id}/add', [ProductController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/{id}/remove', [ProductController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');  

Route::get('/faq', function () {
    $user = Auth::user(); 
    return view('faq', compact('user')); 
})->name('faq');

Route::post('/checkout/order', [ProductController::class, 'storeOrder'])->name('order');

Route::get('/verify', [EmailController::class, 'verify'])->name('verify');

Route::post('/verify_code', [EmailController::class, 'verify_code'])->name('verify_code');

Route::put('/edit/update', [Authorization::class, 'update'])->name('update')->middleware('auth');

Route::get('/structure', [CalculatorController::class, 'structure'])->name('structure');

Route::get('/layout', [CalculatorController::class, 'layout'])->name('layout');

Route::get('scrapper', [ScrapperController::class, 'scrapper'])->name('scrapper');

Route::get('/heating', [CalculatorController::class, 'heating'])->name('heating');
Route::get('/finish', [CalculatorController::class, 'finish'])->name('finish');

Route::get('/com', [CalculatorController::class, 'com'])->name('com');

Route::get('/furniture', [CalculatorController::class, 'furniture'])->name('furniture');

Route::get('/ameneties', [CalculatorController::class, 'plumblight'])->name('plumblight');



Route::get('/results', [CalculatorController::class, 'results'])->name('results');



Route::get('/building', [CalculatorController::class, 'building'])->name('building');

Route::get('/add', [CalculatorController::class, 'add'])->name('add');

Route::get('/winDoor', [CalculatorController::class, 'winDoor'])->name('winDoor');


Route::get('/calculator', function () {
    $userID = Auth::check() ? Auth::id() : 0;
    $user = Auth::user(); 
    return view('calculatorstart', compact('userID', 'user'));
})->name('start');


Route::get('/word', [ExcelController::class, 'makeExcel'])->name('Excel');


Route::get('/register', [Authorization::class, 'register'] ) -> name('register');
Route::post('/login', [Authorization::class, 'loginPost'] ) -> name('login.post');
Route::post('/register', [Authorization::class, 'registerPost'] ) -> name('register.post');
Route::get('/logout', [Authorization::class, 'logout'])->name('logout');

