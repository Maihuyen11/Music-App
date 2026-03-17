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

Route::get('/truongthicamhong', function () {
    return 'Trương Thị Cẩm Hồng';
});


Route::get('/hop/canada-movies', function () {
    $movies = DB::table('movie')->where('country_name', 'Canada')->get();
    return view('canada_movies', ['movies' => $movies]);
});

