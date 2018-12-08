<?php
/**
 * All route names are prefixed with 'admin.'.
 */
Route::group(['namespace'  => 'Products'], function(){

Route::get('products/{id}/delete', 'ProductsController@destroy');
Route::resource('products', 'ProductsController');
});
