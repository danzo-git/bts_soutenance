<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('stagiaire', 'StagiaireCrudController');
    Route::crud('encadreur', 'EncadreurCrudController');
    Route::crud('session','SessionCrudController');
    // Route::crud('developpeur','StagiaireController');
    // Route::crud('developpeur', 'SessionCrudController');
    Route::get('developpeur',function(){
        $stage=StagiaireController::all();
        dd($stage);
    });
}

); // this should be the absolute last line of this file
