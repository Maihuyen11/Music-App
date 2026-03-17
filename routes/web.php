<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top-movies', [MovieController::class, 'topMovies']);

Route::get('/baoyen', function () {
    return view('Bảo Yến');
});

Route::get('/test', [TestController::class, 'test']);

Route::get('/Dinhcuong', function () {
    return 'Dinh Cuong';
});

Route::get('/tranvothuhung', function () {
    return 'Trần Võ Thu Hưng';
});

Route::get('/truongthicamhong', function () {
    return 'Trương Thị Cẩm Hồng';
});