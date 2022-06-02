<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// how to create new route

// Route::resource('games', 'GameController');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// // Getting data from url

// Route::get('/cars/{car}', function($car){
// 	return $car;
// });

// Route::get('/names/{name}/{id}', function($name, $id) {
// 	return $name. '-'. $id;
// });


// // this is seprated

// 	Route::get('/names', function(){
// 		return "first names";
// 	});


// // Route group in laravel
// Route::prefix('admin')->group(function(){
// 	Route::get('/names', function(){
// 		return "admin names";
// 	});

// 	Route::get('/articles', function(){
// 		return "admin articles";
// 	});

// 	Route::get('/news', function(){
// 		return "admin news";
// 	});

// 	Route::get('/features', function(){
// 		return "admin features";
// 	});
// });


// // Pass data from route to view

// Route::get('/topics/{topic}', function($topic){
// 	$title = 'hello world';
// 	return view('welcome',[
// 		'title'=> $title
// 	]);
// });


// Route for crud operation 
Route::get('/', function () {
	return view('welcome');
});


Route::resource('products', ProductController::class);

