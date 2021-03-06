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


        Auth::routes();

        //admin routes
            Route::group(['namespace' => 'Backend',
                            'prefix' => 'admin', 'as' => 'admin.',
                            'middleware' => 'admin'], function () {

                                include_route_files(__DIR__.'/backend/');

                            });


            //frontend routes(normal user)
             Route::group(['middleware' => ['web']], function () {
                Route::group([
                    'namespace' => 'Frontend','as' => 'frontend.',

                ], function () {
                    include_route_files(__DIR__.'/frontend/');


                });
            });

