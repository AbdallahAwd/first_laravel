<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleActionController;
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

Route::view('/contact', 'home.contact')->name('contact');
Route::view('/', 'home.welcome')->name('welcome');

Route::get('/posts/{id}', [HomeController::class, 'singlePost'])->name('Posts.postname');

Route::get('/posts', [HomeController::class, 'allPosts'])->name('Post.post');
// response
// Route::get('/respons/json', function () use ($posts) {
//     return response($posts, 201)
//         ->header('content-type', 'application/json')->cookie('My_Cookie', 'Abdullah', 1440);
// });
// redirect
// Route::get('/respons/json', function () use ($posts) {
//     return redirect('/');
// });
// redirect
// Route::get('/respons/json', function () use ($posts) {
//     return back();
// });
// named route
// Route::get('/respons/json', function () use ($posts) {
//     return redirect()->route('Post.post');
// });
// return json
Route::get('/respons/json', [HomeController::class, 'home']);
//downlaod
// Route::get('/respons/down', function () use ($posts) {
//     return response()->download(public_path('robots.txt'));
// });

Route::prefix('/response')->name('response')->group(function () {

    // routes started with /response

});
Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'store']);
// input query parameters
Route::get('/query', [HomeController::class, 'get_courses']);
Route::get('/single', SingleActionController::class);
