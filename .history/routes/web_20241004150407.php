<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return view('restaurants/index');
});

// Display all the restaurants
Route::get('/index', [RestaurantController::class, 'index'])->name('restaurants.index');

// Route::get('/restaurants',[RestaurantController::class, 'index']);

// Show the details of a specific restaurant by id 
Route::get('/restaurants/{post:id}',  [RestaurantController::class, 'show']);

// Show the form in order to create an restaurant
Route::get('/restaurants/create',[RestaurantController::class, 'create' ]);

// Post/public the restaurant
Route::post('/restaurants/create',function(){

});

// Show the form of an restaurant
Route::get('/restaurants/edit/{post:id}',[RestaurantController::class, 'edit/$id']);

// Update this specific restaurant
Route::put('/restaurants/edit/{post:id}',function($id){

});
// Delete a specific restaurant
Route::delete('/restaurants/{post:id}',function($id){  
});
