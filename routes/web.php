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

// // Creating simple routes like about or contact pages
// Route::get('/about', function () {
//     return "This is the about page.";
// });

// Route::get('/contact', function () {
//     return "This is the contact page.";
// });

// // We can pass parameters into the routes like for example a post id
// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number " . $id . " " . $name;
// });

// // We can name routes to shorten their name if it is too long or complicated to type and we could save it into a variable
// Route::get('/admin/posts/example', array('as'=>'admin.home', function () {
//     $url = route('admin.home');
//     return "The url is " . $url;
// }));

Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');