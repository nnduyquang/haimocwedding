<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class BaoGiaController extends Controller
{
    public function getAllBaoGia()
    {
        $albums = Album::where('IsCampaign', '1')->get();
        return view('frontend.baogia.index', compact(['albums']));
    }

    public function chiTietBaoGia($path)
    {
        $album = Album::where('path', $path)->first();
        return view('frontend.chitietbaogia.index', compact(['album']));
    }
}
