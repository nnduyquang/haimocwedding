<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function getAllTrangChu(){
        $slides = Slider::all()->sortBy('order');
        return view('frontend.trangchu.index', compact(['slides']));
    }
}
