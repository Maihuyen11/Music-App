<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function topMovies()
    {
        // Lấy 10 bộ phim có điểm vote_average cao nhất từ bảng 'movie'
        $movies = DB::table('movie')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();

        // Trả kết quả về file giao diện top_movies.blade.php
        return view('top_movies', compact('movies'));
    }
}