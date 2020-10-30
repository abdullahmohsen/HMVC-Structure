<?php
namespace App\modules\customers\routes;

use Illuminate\Support\Facades\Route;

// Route::get('/', [CustomerController::class, 'index']);

// Route::group(['prefix' => 'admin'], function () {

//     Route::get('home', 'CustomerController@index');
// });

$moduleName = basename(dirname(__DIR__, 1));


Route::group(['namespace' => buildControllerNamespace($moduleName), 'middleware' => 'customer'], function() use ($moduleName){

    Route::prefix(buildPrefix($moduleName, 'frontend'))->namespace('Frontend')->group(function(){

        require 'frontend.php';
    });

    Route::prefix(buildPrefix($moduleName))->namespace('Backend')->group(function(){

        require 'backend.php';
    });

});




