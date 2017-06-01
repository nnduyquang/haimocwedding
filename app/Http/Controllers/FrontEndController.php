<?php

namespace App\Http\Controllers;

use App\Album;
use App\DiaDiem;
use App\Slider;
use App\Trang;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function getAllTrangChu(){
        $slides = Slider::all()->sortBy('order');
        $baogias=Album::where('IsCampaign','1')->orderBy('order','ASC')->get();
        $diadiems=DiaDiem::all()->sortBy('order');
        $albums=Album::where('IsCampaign','0')->limit(3)->get();
        return view('frontend.trangchu.index', compact(['slides','baogias','diadiems','albums']));
    }
    public function getTrangGioiThieu(){
        $gioithieu = Trang::where('path', 'gioi-thieu')->first();
        return view('frontend.gioithieu.index', compact(['gioithieu']));

    }
}
