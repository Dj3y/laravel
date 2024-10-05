<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

// Route::get('/', function () {
//     return view('restaurants/index');
// });

// Display all the restaurants
Route::get('/', [RestaurantController::class, 'index']);

// Show the details of a specific restaurant by id 
Route::get('/{post:id}',  [RestaurantController::class, 'show']);

// Show the form in order to create an restaurant
Route::get('/create',[RestaurantController::class, 'create' ]);

// Post/public the restaurant
Route::post('/create',function(){
});

// Show the form of an restaurant
Route::get('/edit/{post:id}',[RestaurantController::class, 'edit/$id']);

// Update this specific restaurant
Route::put('/edit/{post:id}',function($id){

});
// Delete a specific restaurant
Route::delete('/{post:id}',function($id){  
});
