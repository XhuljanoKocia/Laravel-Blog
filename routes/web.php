<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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

// Route::get('/basicinsert', function(){
//     $post = new Post; // We have to instantiate the Post class

//     // This adds new data on the database, doesn't modify existing values
//     $post->title = 'New title for today'; // Accessing the title and giving it a value
//     $post->content = 'New content for the new title changed today'; // Accessing the content and giving it a value

//     $post->save(); // Saving our changes, this will not duplicate data if it already exists on the database
// });

// Route::get('/basicinsert', function(){
//     $post = Post::find(2); // We select the data that we want to change its content

//     $post->title = 'New PHP title'; // Accessing the title and giving it a new value
//     $post->content = 'New PHP content'; // Accessing the content and giving it a new value

//     $post->save(); // Saving our changes
// });

// Route::get('/create', function(){
//     Post::create(['title'=>'The create method', 'content'=>'This is the new content for the create method']);
// });

// Route::get('/update', function(){
//     // This method updates the content on the database which has the ID 2
//     Post::where('id', 2)->update(['title'=>'New simple title', 'content'=>'New simple content']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(3); // We find an ID that we want to delete

//     $post->delete(); // We delete the found ID
// });

// Route::get('/delete2', function(){
//     Post::destroy(4); // If we know the ID we can simply destory that ID, if we put an array like [4, 5, 6] it will delete multiple data
//     // Post::where('is_admin', 0)->delete(); // This is another way of deleting with a condition
// });

// Route::get('/softdelete', function(){
//     Post::find(12)->delete(); // We specify the ID of the row we want to delete and the deleted_at database column will be populated
// });

// Route::get('/readsoftdelete', function(){
//     // $post = Post::find(12);

//     // return $post;

//     // $post = Post::withTrashed()->where('id', 12)->get(); // This method selects the deleted data from the database, it will show even the data that is not deleted as well

//     // return $post;

//     $post = Post::onlyTrashed()->get(); // This method selects only the trashed items

//     return $post;
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->restore(); // This method finds all the trashed items in the database
// });

// Route::get('/forceddelete', function(){
//     Post::onlyTrashed()->where('id', 13)->forceDelete(); // This deletes the data completely, only the trashed ones
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIPS
|--------------------------------------------------------------------------
*/

// One to one relationship
// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post; // We can access the users post like this even its title or content adding post->content/title;
// });

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

// One to many relationship
// Route::get('/post', function(){
//     $user = User::find(1);

//     foreach($user->posts as $post){
//         echo $post->title . "<br>";
//     }
// });

// Many to many relationship
// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id);

//     foreach($user->roles as $role){
//         return $role->name;
//     }
// });

// Accessing the intermediate table / pivot

// Route::get('user/pivot', function(){
//     $user = User::find(1);

//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }
// });

// Has many through relation

Route::get('/user/country', function(){});
