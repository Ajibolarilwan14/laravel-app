<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;
use App\Country;
use App\Http\Controllers\PostController;

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

// Route::get('/welcome', function() {
//     return 'Welcome to Ot&t, Mr Adebayo Rilwan Ajibola';
// });

// Route::get('/greeting/{name}', function($name) {
//     return "Welcome to Ot&t $name, i wish you a very happy working experience.......";
// });

// Route::get('/greeting/{name}', 'greeting@index');

// Route::get('/message/create/{create}', 'greeting@create');

// Route::get('/message/show/{id}', 'greeting@show');

// Route::get('/message/update/{id}', 'greeting@update');

// Route::get('/message/delete/{id}', 'greeting@update');



/*
|--------------------------------------------------------------------------
| RAW Sql queries with Laravel
|--------------------------------------------------------------------------
|
*/
// Route::get('/insert', function() {
// DB::insert('insert into posts(title, content) values(?, ?)', ['php with laravel', 'laravel is one of the best framework for laravel!.']);
// });

// Route::get('/read', function() {
//     $data = DB::select('select * from posts where id = ?', [1]);

//     // var_dump($data);
//     foreach ($data as $result) {
//         # code...
//         echo $result->content;
//     }
// });

// Route::get('/update', function() {
//     $updated = DB::update('update posts set title="newly updated title" where id = ?', [1]);

//     return $updated;
// });

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ?', [1]);

//     return $deleted;
// });

/*
|--------------------------------------------------------------------------
| Eloquent Queries with the Database
|--------------------------------------------------------------------------
*/
// Route::get('/create', function() {
//     // #code...
//     $post = new Post;
//     // $post = Post::find(2);

//     $post->title = ('Updated title from Eloquent');
//     $post->content = ('This just blow my mind away!');
//     // $post->user_id = (2);
//     $post->save();
// });

// Route::get('/create2', function() {
//     Post::create(['title' => 'Just another title', 'content' => 'Waooo, I\'am learning a lot with Laravel']);
// });

// Route::get('/show', function() {
//     #code...
//     $posts = Post::all();

//     foreach ($posts as $post) {
//         # code...
//         return $post->content;
//     }
// });

// Route::get('/findwhere', function() {
//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });

// Route::get('/findmore', function() {
//     // $posts = Post::findOrfail(3);

//     // return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();
// });

// Route::get('/changes', function() {
//     // #code...
//     Post::where('id', 2)->where('is_admin', 0)->update(['title' => 'Another One', 'content' => 'I love Laravel']);
// });

// Route::get('/destroy', function() {
//     // #code...
//     // $post = Post::find(2);

//     // $post->delete();

//     // Post::destroy(3);  #delete single
//     Post::destroy([4,5]);  #delete multiple

//     // Post::where('is_admin', 0)->delete();
// });

// Route::get('/softdelete', function() {
//     Post::find(6)->delete();
// });

// Route::get('/readsoftdelete', function() {
//     // $post = Post::find(6);

//     $post = Post::withTrashed()->where('id', 6)->get();

//     // $post = Post::onlyTrashed()->where('is_admin', 0)->get();

//     return $post;
// });

// Route::get('/restore', function() {
//     Post::withTrashed()->where('id', 6)->restore();
// });

// Route::get('/forcedelete', function() {
//     Post::withTrashed()->where('id', 6)->forceDelete();
// });

/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
*/
// One to One Relationship
// Route::get('/user/{id}/post', function($id) {
//     // $user = User::find($id)->post;

//     // echo $user;
//     return User::find($id)->post->content;
// });

// // Inverse Relationship
// Route::get('/post/{id}/user', function($id) {
//     return Post::find($id)->user->name;
// });

// // One to Many Relationship
// Route::get('/posts', function() {
//     $user = User::find(1);
//     // return $user->posts;
//     foreach ($user->posts as $post) {
//         # code...
//         echo $post . "<br>";
//     }
// });

// // Many to Many Relationship
// Route::get('/users/{id}/role', function($id) {
//     // $user = User::find($id);
//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//     return $user;

//     // foreach ($user->roles as $role) {
//     //     # code...
//     //     echo $role->name;
//     // }
// });

// // Accessing the intermediate table / Pivot table
// Route::get('/users/pivot', function() {
//     $user = User::find(1);

//     foreach ($user->roles as $role) {
//         # code...
//         return $role->pivot->created_at;
//         // return $role->pivot;
//     }
// });

// // Has many through relationship
// Route::get('/user/country', function() {
//     $country = Country::find(2);

//     foreach ($country->posts as $post) {
//         # code...
//         return $post->title;
//     }
// });

// // Polymorphic Relation
// Route::get('/users/photos', function() {
//     $user = User::find(1);

//     foreach ($user->photos as $photo) {
//         # code...
//         return $photo;
//     }    
// });

Route::get('/','SpamController@show_form')->name('spam.form');

Route::post('/sms-spam-detect','SpamController@detect')->name('spam.detect');

Route::resource('/posts', 'PostController::index');