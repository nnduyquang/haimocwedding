<?php

namespace App\Http\Controllers;

use App\Album;
use App\DichVu;
use App\ImageManager;
use App\PhuKien;
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
        $dichvus=DichVu::whereIn('id',explode('-',$album->arrayiddichvu))->orderBy('order', 'asc')->get();
        $phukiens=PhuKien::find((explode('-',$album->arrayidphukien)));
        $imagemanagers = ImageManager::where('id_album', $album->id)->get();
        return view('frontend.chitietbaogia.index', compact(['album','dichvus','phukiens','imagemanagers']));
    }
}
