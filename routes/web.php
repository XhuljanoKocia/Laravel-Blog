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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Hi contact page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number " . $id . " " . $name;
// });

// Route::get('/admin/posts/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');

//     return "This url is " . $url;
// }));

// We should use the whole url or controller file
// Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

// With resource we target the CRUD functions
Route::resource('posts', '\App\Http\Controllers\PostsController');