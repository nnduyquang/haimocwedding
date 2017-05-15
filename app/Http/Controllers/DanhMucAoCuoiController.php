<?php

namespace App\Http\Controllers;

use App\DanhMucAoCuoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class DanhMucAoCuoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $danhmucaocuois = DanhMucAoCuoi::orderBy('order', 'ASC')->paginate(5);
        return view('backend.admin.danhmucaocuoi.index', compact('danhmucaocuois'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.danhmucaocuoi.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $danhmucaocuoi = new DanhMucAoCuoi();
        $name = $request->input('name');
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $order = $request->input('order');
        $mota = $request->input('mota');
        $file_anhdaidien = Input::file('anhdaidien');
        $filename = get_filename_from_input($file_anhdaidien);
        $directory = "images/temps/";
        $file_anhdaidien->move($directory, $filename);
        if (strlen(trim($order)) == 0)
            $danhmucaocuoi->order = 1;
        else
            $danhmucaocuoi->order = $order;
        $danhmucaocuoi->name = $name;
        $danhmucaocuoi->mota = $mota;
        $danhmucaocuoi->path = $path;
        $danhmucaocuoi->anhdaidien = $filename;
        $danhmucaocuoi->user_id = Auth::user()->id;
        $danhmucaocuoi->save();
        return redirect()->route('danhmucaocuois.index')
            ->with('success', 'Danh Mục Áo Cưới store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhmucaocuoi = DanhMucAoCuoi::find($id);
        return view('backend.admin.danhmucaocuoi.edit', compact('danhmucaocuoi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $danhmucaocuoi = DanhMucAoCuoi::find($id);
        $name = $request->input('name');
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $order = $request->input('order');
        $mota = $request->input('mota');
        $file_anhdaidien = Input::file('anhdaidien');
        if ($file_anhdaidien) {
            File::delete('images/temps/' . $danhmucaocuoi->anhdaidien);
            $filename = get_filename_from_input($file_anhdaidien);
            $directory = "images/temps/";
            $file_anhdaidien->move($directory, $filename);
            $danhmucaocuoi->anhdaidien = $filename;
        }
        if (strlen(trim($order)) == 0)
            $danhmucaocuoi->order = 1;
        else
            $danhmucaocuoi->order = $order;
        $danhmucaocuoi->name = $name;
        $danhmucaocuoi->mota = $mota;
        $danhmucaocuoi->path = $path;
        $danhmucaocuoi->user_id = Auth::user()->id;
        $danhmucaocuoi->save();
        return redirect()->route('danhmucaocuois.index')
            ->with('success', 'Danh Mục Áo Cưới update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $danhmucaocuoi = DanhMucAoCuoi::find($id);
        File::delete('images/temps/' . $danhmucaocuoi->anhdaidien);
        $danhmucaocuoi->delete();
        return redirect()->route('danhmucaocuois.index')
            ->with('success', 'Danh Mục Áo Cưới deleted successfully');
    }
}
