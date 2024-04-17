<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Page World';
})->name('home');

Route::get('/shop', function () {
    return 'Page Shop';
})->middleware('checkAge');

Route::get('/about', function () {
    return 'Page About';
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/post', function () {
    echo 'Method post';
});

Route::put('/put', function () {
    return 'Method put';
});

Route::prefix('admin')->group(function(){
    Route::get('posts/{post}/comments/{comment}', function($postID, $commentID){
        return "postId: $postID - commentId: $commentID";
    });
    
    Route::get('user/{name?}', function($name = 'TNXT'){
        return $name;
    });
});

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderitems', OrderItemController::class);

Route::get('/child', function(){
    return view('child');
});

Route::get('/auth', function(){
    return view('auth.register');
});

Route::get('/auth', function(){
    return view('auth.register');
});

Route::prefix('admin')->group(function(){
    Route::resource('users', App\Http\Controllers\Admin\UserController::class,['names'=>'admin.users']);
});

Route::get('/', 'UserController@getLogin');
Route::post('/', 'UserController@postLogin');

Route::get('/', [PostController::class,'header']);
Route::get('/search', [PostController::class,'search']);