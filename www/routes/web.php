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
    return view('site.home.index');
});

Route::get('/categories', 'Site\ResourceCategoryController@index');
Route::get('/resources', 'Site\ResourceController@index');

/* Admin */

$settings = [
    'namespace' => 'Admin',
    'prefix' => 'admin/resource',
];

Route::group($settings, function(){
    $methods = ['index', 'create', 'store', 'edit', 'update', 'destroy'];
    Route::resource('category','ResourceCategoryController')
        ->only($methods)
        ->names('admin.resource.category')
    ;
});