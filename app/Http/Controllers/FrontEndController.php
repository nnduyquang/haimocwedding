<?php

namespace App\Http\Controllers;

use App\Album;
use App\DiaDiem;
use App\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function getAllTrangChu(){
        $slides = Slider::all()->sortBy('order');
        $baogias=Album::where('IsCampaign','1')->get();
        $diadiems=DiaDiem::all()->sortBy('order');
        return view('frontend.trangchu.index', compact(['slides','baogias','diadiems']));
    }
}
