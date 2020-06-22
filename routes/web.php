<?php

Route::get('/', 'FrontEndController@index')->name('index.home');

Route::get('/product', function() {
    return view ('product');
});


Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);

    // Category
    Route::get('category/index', 'CategoryController@index')->name('index.category');
    Route::get('category/add', 'CategoryController@create')->name('add.category');
    Route::get('category/edit/{id}', 'CategoryController@edit')->name('edit.category');
    Route::get('category/delete/{id}', 'CategoryController@destroy')->name('delete.category');
    Route::post('category/store', 'CategoryController@store')->name('store.category');
    Route::post('category/update', 'CategoryController@update')->name('update.category');

    // product
    Route::get('product/index', 'ProductController@index')->name('index.product');
    Route::Post('product/store', 'ProductController@store')->name('store.product');
    Route::get('product/add', 'ProductController@create')->name('add.product');
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
