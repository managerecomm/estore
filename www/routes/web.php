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
$admin_url = env('APP_ADMIN_URL');

Route::get('/', function () {
    return view('site.home.index');
});

Route::get('/'.$admin_url, function () {
    return view('admin.home.index');
});

/* Admin */

$settings = [
    'namespace' => 'Admin',
    'prefix' => $admin_url.'/resource',
];

Route::group($settings, function(){
    $methods = ['index', 'create', 'store', 'edit', 'update', 'destroy'];
    Route::resource('category','AdminResourceCategoryController')
        ->only($methods)
        ->names('$admin_url.resource.category')
    ;
});