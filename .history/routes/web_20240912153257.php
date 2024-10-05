<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Display all the restaurants
Route::get('/restaurants',function(){
    return view(restaunts);
});
// Show the form in order to create an article
Route::get('/restaurant/create',function(){
    return "Form to create a restaurant";
});
// Post/public the article
Route::post('/restaurant/create',function(){

});
// Show the form of an article
Route::get('/restaurant/edit/{post:id}',function($id){
    return "Form to edit restaurant with id: $id";
});
// Update this specific article
Route::put('/restaurant/edit/{post:id}',function($id){

});
// Delete a specific article
Route::delete('/restaurant/{post:id}',function($id){
    
});
