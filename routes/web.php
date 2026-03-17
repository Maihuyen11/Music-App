<?php

use Illuminate\Support\Facades\Route;

Route::get('/baoyen', function () {
    return view('Bảo Yến');
});

// Route for TestController@test
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('/tranvothuhung', function () {
    return 'Trần Võ Thu Hưng';
});
