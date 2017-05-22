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
        $dichvus = DichVu::whereIn('id', explode('-', $album->arrayiddichvu))->orderBy('order', 'asc')->get();
        $phukiens = PhuKien::find((explode('-', $album->arrayidphukien)));
        $imagemanagers = ImageManager::where('id_album', $album->id)->get();
        $diadiems = $album->diadiems()->get();
        $albums = Album::whereNotIn('id', [$album->id])->where('IsCampaign', '0')->limit(3)->get();
        return view('frontend.chitietalbum.index', compact(['album', 'albums', 'dichvus', 'phukiens', 'imagemanagers', 'diadiems']));
    }

    public function getAllAlbum()
    {
        $albums = Album::where('IsCampaign', '0')->get();
        $diadiems = DiaDiem::all();
        return view('frontend.tatcaalbum.index', compact(['albums', 'diadiems']));
    }

    public function getAlbumByDiaDiem($path)
    {
        $diadiem = DiaDiem::where('path', $path)->first();
        $albums = $diadiem->albums()->where('IsCampaign', '0')->get();
        $diadiems = DiaDiem::all();
        return view('frontend.tatcaalbum.index', compact(['albums', 'diadiems']));
    }
}
