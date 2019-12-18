<?php

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
    return view('welcome');
});
Route::get('/about', function (){
   return view('page.about');
});
Route::get('/recipe', function (){
    return view('page.recipe');
});
Route::get('/blog', function (){
    return view('page.blog');
});
Route::get('/single_blog', function (){
    return view('page.single_blog');
});
Route::get('/recipes_details', function (){
    return view('page.recipe_details');
});
Route::get('/elements', function (){
    return view('page.elements');
});
Route::get('/contact', function (){
    return view('page.contact');
});

Route::get('/admin', 'HomeController@dashboard')->name('dashboard');

Route::get('/admin/comments/list_comments', 'CommentController@index')->name('');


Route::group(['prefix' => '/admin/product_categories'], function () {
    Route::get('/add_categories',['as' => 'admin.product_categories.add_categories', 'uses' =>'admin\CategoryController@getAdd']);
    Route::post('/add_categories', ['as' => 'admin.product_categories.add_categories', 'uses' =>'admin\CategoryController@postAdd']);
    Route::get('/list_categories',['as' => 'admin.product_categories.list_categories', 'uses' =>'admin\CategoryController@index']);

    Route::get('edit_categories/{id}', ['as' => 'admin.product_categories.edit_categories', 'uses' =>'admin\CategoryController@getEdit']);
    Route::post('edit_categories/{id}', ['as' => 'admin.product_categories.edit_categories', 'uses' =>'admin\CategoryController@postEdit']);
    Route::get('delete/{id}',['as' => 'admin.product_categories.delete', 'uses' =>'admin\CategoryController@delete']);
});
Route::group(['prefix' => '/admin/users'], function () {
    Route::get('/add_users',['as' => 'admin.users.add_users', 'uses' =>'admin\UserController@getAdd']);
    Route::post('/add_users', ['as' => 'admin.users.add_users', 'uses' =>'admin\UserController@postAdd']);
    Route::get('/list_users',['as' => 'admin.users.list_users', 'uses' =>'admin\UserController@index']);

    Route::get('edit_users/{id}', ['as' => 'admin.users.edit_users', 'uses' =>'admin\UserController@getEdit']);
    Route::post('edit_users/{id}', ['as' => 'admin.users.edit_users', 'uses' =>'admin\UserController@postEdit']);
    Route::get('delete/{id}',['as' => 'admin.users.delete', 'uses' =>'admin\UserController@delete']);
});
Route::group(['prefix' => '/admin/blog'], function () {
    Route::get('/add_blog',['as' => 'admin.blog.add_blog', 'uses' =>'admin\BlogController@getAddBlog']);
    Route::post('/add_blog', ['as' => 'admin.blog.add_blog', 'uses' =>'admin\BlogController@postAddBlog']);
    Route::get('/list_blog',['as' => 'admin.blog.list_blog', 'uses' =>'admin\BlogController@index']);

    Route::get('edit_blog/{id}', ['as' => 'admin.blog.edit_blog', 'uses' =>'admin\BlogController@getEditBlog']);
    Route::post('edit_blog/{id}', ['as' => 'admin.blog.edit_blog', 'uses' =>'admin\BlogController@postEditBlog']);
    Route::get('delete/{id}',['as' => 'admin.blog.delete', 'uses' =>'admin\BlogController@delete']);
});

Route::group(['prefix' => '/admin/food'], function () {
    Route::get('/add_food',['as' => 'admin.food.add_food', 'uses' =>'admin\FoodController@getAddFood']);
    Route::post('/add_food', ['as' => 'admin.food.add_food', 'uses' =>'admin\FoodController@postAddFood']);
    Route::get('/list_food',['as' => 'admin.food.list_food', 'uses' =>'admin\FoodController@index']);

    Route::get('edit_food/{id}', ['as' => 'admin.food.edit_food', 'uses' =>'admin\FoodController@getEditFood']);
    Route::post('edit_food/{id}', ['as' => 'admin.food.edit_food', 'uses' =>'admin\FoodController@postEditFood']);
    Route::get('delete/{id}',['as' => 'admin.food.delete', 'uses' =>'admin\FoodController@delete']);
});
Auth::routes();

