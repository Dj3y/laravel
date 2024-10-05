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
Route::get('/restaurant/{post:id}',function($id){
<<<<<<< Tabnine <<<<<<<
/**//+
 * Display the details of a specific restaurant.//+
 *//+
 * This function retrieves the details of a restaurant based on the provided ID.//+
 * It then returns the view for displaying the restaurant's details.//+
 *//+
 * @param int $id The unique identifier of the restaurant.//+
 *//+
 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory The view for displaying the restaurant's details.//+
 *///+
Route::get('/restaurant/{post:id}', function ($id) {//+
    return view("restaurants/show/$id");//+
});//+
>>>>>>> Tabnine >>>>>>>// {"conversationId":"691d584f-d980-47b9-a55e-540c1fb1578e","source":"instruct"}
    return view("restaurants/show/$id");
});
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
