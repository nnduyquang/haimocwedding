<?php

namespace App\Http\Controllers;

use App\DiaDiem;
use Illuminate\Http\Request;

class DiaDiemFEController extends Controller
{
    public function getAllAlbumBelongToDiaDie($path)
    {
        $diadiem=DiaDiem::where('path',$path)->first();
        $albums=$diadiem->albums()->where('IsCampaign','0')->get();
        return view('frontend.diadiem.index', compact(['diadiem','albums']));
    }
}
