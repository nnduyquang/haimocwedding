<?php

namespace App\Http\Controllers;

use App\Trang;
use Illuminate\Http\Request;

class TinTucFEController extends Controller
{
    public function showAllTinTuc()
    {
        $tintucs = Trang::where('idLoai', '1')->orderBy('id','DESC')->get();
        foreach ($tintucs as $key => $tintuc) {
            $tintuc->motangan = cat_chuoi_dai_thanh_ngan($tintuc->motangan, 140);
        }
        return view('frontend.tintuc.index', compact(['tintucs']));
    }

    public function chiTietTinTuc($path)
    {
        $tintuc = Trang::where('path', $path)->first();
        return view('frontend.chitiettintuc.index', compact(['tintuc']));
    }
}
