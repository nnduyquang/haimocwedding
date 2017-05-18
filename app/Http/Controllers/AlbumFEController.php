<?php

namespace App\Http\Controllers;

use App\DiaDiem;
use Illuminate\Http\Request;
use App\Album;
use App\DichVu;
use App\ImageManager;
use App\PhuKien;

class AlbumFEController extends Controller
{
    public function chiTietAlbum($path)
    {
        $album = Album::where('path', $path)->first();
        $dichvus=DichVu::whereIn('id',explode('-',$album->arrayiddichvu))->orderBy('order', 'asc')->get();
        $phukiens=PhuKien::find((explode('-',$album->arrayidphukien)));
        $imagemanagers = ImageManager::where('id_album', $album->id)->get();
        $diadiems = $album->diadiems()->get();
        return view('frontend.chitietalbum.index', compact(['album','dichvus','phukiens','imagemanagers','diadiems']));
    }
}
