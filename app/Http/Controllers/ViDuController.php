<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViDuController extends Controller
{
    function theloai($id)
    {
        $data = DB::select("select * from sach where the_loai = ?",[$id]);
        return view("vidusach.index", compact("data"));
    }
}
