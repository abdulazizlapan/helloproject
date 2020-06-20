<?php
Route::get('/', function() {
    return view ('index');
});
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

    Route::get('category/index', 'CategoryController@index')->name('index.category');
    Route::get('category/add', 'CategoryController@create')->name('add.category');
    Route::post('category/store', 'CategoryController@store')->name('store.category');
    Route::get('product/index', 'ProductController@index')->name('index.product');
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
