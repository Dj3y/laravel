<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Display all the restaurants
Route::get('/restaurants',function(){
    return view('restaurants/index');
});

// Show the details of a specific restaurant
Route::get('/restaurant/show',function(){
    return view('restaurants/show');
});
// Route::get('/restaurant/show/{post:id}',function($id){
//     return view("restaurants/show/$id");
// });

// Show the form in order to create an restaurant
Route::get('/restaurant/create',function(){
    return view('restaurants/create');
});

// Post/public the restaurant
Route::post('/restaurant/create',function(){

});

// Show the form of an restaurant
Route::get('/restaurant/edit/{post:id}',function($id){
    return view("restaurant/edit/$id");
});
// Update this specific restaurant
Route::put('/restaurant/edit/{post:id}',function($id){

});
// Delete a specific restaurant
Route::delete('/restaurant/{post:id}',function($id){
    
});
