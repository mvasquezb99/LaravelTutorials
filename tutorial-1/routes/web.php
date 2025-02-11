<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {

    $data1 = "About us - Online Store";

    $data2 = "About us";

    $description = "This is an about page ...";

    $author = "Developed by: Your Name";

    return view('home.about',[
        "title" => $data1,
        "subtitle" => $data2,
        "description" => $description,
        "author" => $author,
    ]);
})->name("home.about");

Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");

Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/products/success', 'App\Http\Controllers\ProductController@success')->name("product.success");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");



