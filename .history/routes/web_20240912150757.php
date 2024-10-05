<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Display all the restaurants
Route::get('/restaurants',ion(){

});
// Show the form in order to create an article
Route::get('/article/create',function(){

});
// Post/public the article
Route::post('/article/create',function(){

});
// Show the form of an article
Route::get('/article/edit/{post:id}',function($id){

});
// Update this specific article
Route::put('/article/edit/{post:id}',function($id){

});
// Delete a specific article
Route::delete('/article/{post:id}',function($id){
    
});
