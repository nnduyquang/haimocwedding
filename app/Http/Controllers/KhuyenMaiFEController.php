<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trang;

class KhuyenMaiFEController extends Controller
{
    public function showAllKhuyenMai()
    {
        $tintucs = Trang::where('idLoai', '0')->orderBy('id','DESC')->get();
        foreach ($tintucs as $key => $tintuc) {
            $tintuc->motangan = cat_chuoi_dai_thanh_ngan($tintuc->motangan, 140);
        }
        return view('frontend.khuyenmai.index', compact(['tintucs']));
    }

    public function chiTietKhuyenMai($path)
    {
        $tintuc = Trang::where('path', $path)->first();
        return view('frontend.chitietkhuyenmai.index', compact(['tintuc']));
    }
}
