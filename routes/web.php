<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

// Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

// Route::resource('posts', '\App\Http\Controllers\PostsController');

// Route::get('/contact', '\App\Http\Controllers\PostsController@contact');

// Route::get('/post', '\App\Http\Controllers\PostsController@showPost');

/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is a popular framework']);
// });

// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?', [1]); // This will return an array with all the columns data that match the ID 1

//     foreach($results as $post){ // We loop through the array and return the title
//         return $post->title;
//     }
// });

// Route::get('/updated', function(){
//     $updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);

//     return $updated;
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', [1]);

//     return $deleted;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post -> title;
//     }
// });

// Route::get('/find', function(){
//     $post = Post::find(2); // We get the id of our row from the database which in our case is number 2

//     return $post->title;
// });

// Route::get('/findwhere', function(){
//     // We query the posts table where the id is 3, take 1 from it and get it.
//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });

// Route::get('/findmore', function(){
//     // $posts = Post::findOrFail(3); // It searches for a post with a specific ID and shows data in JSON format if found or page 404 if no data with that ID
//     $posts = Post::where('users_count', '<', 50)->firstOrFail(); // This translates into this query select * from `posts` where `users_count` < 50 limit 1, so the firstOrFail indicates the limit

//     return $posts;
// });
