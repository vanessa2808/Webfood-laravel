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

Route::get('/','page\FrontEndController@getHomePage', function () {
    return view('welcome');
});
Route::get('/home', 'page\FrontEndController@getHomePage' ,function () {
    return view('welcome');
});


Route::get('/about', 'page\FrontEndController@getAboutPage' ,function () {
    return view('page.about');
});
Route::get('/recipe','page\FrontEndController@getRecipePage', function () {
    return view('page.recipe');
});
Route::get('/blog','page\FrontEndController@getBlogPage', function () {
    return view('page.blog');
});
Route::get('/single_blog', 'page\FrontEndController@getSingleBlogPage', function () {
    return view('page.single_blog');
});
Route::get('/recipes_details', function () {
    return view('page.recipe_details');
});
Route::get('/elements', function () {
    return view('page.elements');
});
Route::get('/contact', function () {
    return view('page.contact');
});


Route::get('/admin/comments/list_comments', 'CommentController@index')->name('');

Auth::routes(['verify' => false, 'register' => false]);

Route::group(['namespace' => 'Admin', 'middleware' => 'verified', 'middleware' => 'administrator'], function() {
    Route::get('/admin', 'HomeController@dashboard')->name('dashboard');

    Route::group(['prefix' => '/admin/product_categories'], function () {
        Route::get('/add_categories', ['as' => 'admin.product_categories.add_categories', 'uses' => 'CategoryController@getAdd']);
        Route::post('/add_categories', ['as' => 'admin.product_categories.add_categories', 'uses' => 'CategoryController@postAdd']);
        Route::get('/list_categories', ['as' => 'admin.product_categories.list_categories', 'uses' => 'CategoryController@index']);

        Route::get('edit_categories/{id}', ['as' => 'admin.product_categories.edit_categories', 'uses' => 'CategoryController@getEdit']);
        Route::post('edit_categories/{id}', ['as' => 'admin.product_categories.edit_categories', 'uses' => 'CategoryController@postEdit']);
        Route::get('delete/{id}', ['as' => 'admin.product_categories.delete', 'uses' => 'CategoryController@delete']);
    });
    Route::group(['prefix' => '/admin/users'], function () {
        Route::get('/add_users', ['as' => 'admin.users.add_users', 'uses' => 'UserController@getAdd']);
        Route::post('/add_users', ['as' => 'admin.users.add_users', 'uses' => 'UserController@postAdd']);
        Route::get('/list_users', ['as' => 'admin.users.list_users', 'uses' => 'UserController@index']);

        Route::get('edit_users/{id}', ['as' => 'admin.users.edit_users', 'uses' => 'UserController@getEdit']);
        Route::post('edit_users/{id}', ['as' => 'admin.users.edit_users', 'uses' => 'UserController@postEdit']);
        Route::get('delete/{id}', ['as' => 'admin.users.delete', 'uses' => 'UserController@delete']);
    });
    Route::group(['prefix' => '/admin/blog'], function () {
        Route::get('/add_blog', ['as' => 'admin.blog.add_blog', 'uses' => 'BlogController@getAddBlog']);
        Route::post('/add_blog', ['as' => 'admin.blog.add_blog', 'uses' => 'BlogController@postAddBlog']);
        Route::get('/list_blog', ['as' => 'admin.blog.list_blog', 'uses' => 'BlogController@index']);

        Route::get('edit_blog/{id}', ['as' => 'admin.blog.edit_blog', 'uses' => 'BlogController@getEditBlog']);
        Route::post('edit_blog/{id}', ['as' => 'admin.blog.edit_blog', 'uses' => 'BlogController@postEditBlog']);
        Route::get('delete/{id}', ['as' => 'admin.blog.delete', 'uses' => 'BlogController@delete']);
    });

    Route::group(['prefix' => '/admin/food'], function () {
        Route::get('/add_food', ['as' => 'admin.food.add_food', 'uses' => 'FoodController@getAddFood']);
        Route::post('/add_food', ['as' => 'admin.food.add_food', 'uses' => 'FoodController@postAddFood']);
        Route::get('/list_food', ['as' => 'admin.food.list_food', 'uses' => 'FoodController@index']);

        Route::get('edit_food/{id}', ['as' => 'admin.food.edit_food', 'uses' => 'FoodController@getEditFood']);
        Route::post('edit_food/{id}', ['as' => 'admin.food.edit_food', 'uses' => 'FoodController@postEditFood']);
        Route::get('delete/{id}', ['as' => 'admin.food.delete', 'uses' => 'FoodController@delete']);
    });

    Route::group(['prefix' => '/admin/header'], function () {
        Route::get('/add_header', ['as' => 'admin.header.add_header', 'uses' => 'HeaderController@getAddHeader']);
        Route::post('/add_header', ['as' => 'admin.header.add_header', 'uses' => 'HeaderController@postAddHeader']);
        Route::get('/list_header', ['as' => 'admin.header.list_header', 'uses' => 'HeaderController@index']);

        Route::get('edit_header/{id}', ['as' => 'admin.header.edit_header', 'uses' => 'HeaderController@getEditHeader']);
        Route::post('edit_header/{id}', ['as' => 'admin.header.edit_header', 'uses' => 'HeaderController@postEditHeader']);
        Route::get('delete/{id}', ['as' => 'admin.header.delete', 'uses' => 'HeaderController@delete']);
    });

// Main

    Route::group(['prefix' => '/admin/main'], function () {
        Route::get('/add_main', ['as' => 'admin.main.add_main', 'uses' => 'MainController@getAddMain']);
        Route::post('/add_main', ['as' => 'admin.main.add_main', 'uses' => 'MainController@postAddMain']);
        Route::get('/list_main', ['as' => 'admin.main.list_main', 'uses' => 'MainController@index']);

        Route::get('edit_main/{id}', ['as' => 'admin.main.edit_main', 'uses' => 'MainController@getEditMain']);
        Route::post('edit_main/{id}', ['as' => 'admin.main.edit_main', 'uses' => 'MainController@postEditMain']);
        Route::get('delete/{id}', ['as' => 'admin.main.delete', 'uses' => 'MainController@delete']);
    });

    Route::group(['prefix' => '/admin/sidebar'], function () {
        Route::get('/add_sidebar', ['as' => 'admin.sidebar.add_sidebar', 'uses' => 'SidebarController@getAddSidebar']);
        Route::post('/add_sidebar', ['as' => 'admin.sidebar.add_sidebar', 'uses' => 'SidebarController@postAddSidebar']);
        Route::get('/list_sidebar', ['as' => 'admin.sidebar.list_sidebar', 'uses' => 'SidebarController@index']);

        Route::get('edit_sidebar/{id}', ['as' => 'admin.sidebar.edit_sidebar', 'uses' => 'SidebarController@getEditSidebar']);
        Route::post('edit_sidebar/{id}', ['as' => 'admin.sidebar.edit_sidebar', 'uses' => 'SidebarController@postEditSidebar']);
        Route::get('delete/{id}', ['as' => 'admin.sidebar.delete', 'uses' => 'SidebarController@delete']);
    });

    Route::group(['prefix' => '/admin/about'], function () {
        Route::get('/add_about', ['as' => 'admin.about.add_about', 'uses' => 'AboutController@getAddAbout']);
        Route::post('/add_about', ['as' => 'admin.about.add_about', 'uses' => 'AboutController@postAddAbout']);
        Route::get('/list_about', ['as' => 'admin.about.list_about', 'uses' => 'AboutController@index']);

        Route::get('edit_about/{id}', ['as' => 'admin.about.edit_about', 'uses' => 'AboutController@getEditAbout']);
        Route::post('edit_about/{id}', ['as' => 'admin.about.edit_about', 'uses' => 'AboutController@postEditAbout']);
        Route::get('delete/{id}', ['as' => 'admin.about.delete', 'uses' => 'AboutController@delete']);
    });
});



