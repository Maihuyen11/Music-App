<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function phimThoiLuongDai()
    {
        // Truy vấn 10 bộ phim có runtime > 120 phút
        $movies = DB::table('movie') 
                    ->select('movie_name', 'release_date', 'runtime')
                    ->where('runtime', '>', 120)
                    ->limit(10)
                    ->get();

        // Trả về view và truyền biến $movies sang
        return view('phim_thoi_luong_dai', compact('movies'));
    }
}
