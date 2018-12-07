<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::group(['namespace'  => 'Dashboard'], function(){
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
