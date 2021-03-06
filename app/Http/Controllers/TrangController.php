<?php

namespace App\Http\Controllers;

use App\Trang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class TrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $trangs = Trang::orderBy('order', 'DESC')->paginate(5);
        return view('backend.admin.trang.index', compact('trangs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.trang.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trang = new Trang();
        $name = $request->input('name');
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $order = $request->input('order');
        $noidung = $request->input('noidung');
        $idLoai = $request->input('idLoai');
        $motangan=$request->input('motangan');
        $file_anhdaidien = Input::file('anhdaidien');
        $file_anhmini = Input::file('anhmini');
        $directory = "images/tintuc/";
        if ($file_anhmini) {
            $filename_anhmini = get_filename_from_input($file_anhmini);
            $file_anhmini->move($directory, $filename_anhmini);
            $trang->anhmini =$filename_anhmini;
        }
        $filename_anhdaidien = get_filename_from_input($file_anhdaidien);
        $file_anhdaidien->move($directory, $filename_anhdaidien);
        if (strlen(trim($order)) == 0)
            $trang->order = 1;
        else
            $trang->order = $order;
        $trang->name = $name;
        $trang->path=$path;
        $trang->noidung = $noidung;
        $trang->idLoai = $idLoai;
        $trang->anhdaidien =$filename_anhdaidien;

        $trang->motangan=$motangan;
        $trang->user_id = Auth::user()->id;
        $trang->save();
        return redirect()->route('trangs.index')
            ->with('success', 'Trang store successfully');
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
        $trang = Trang::find($id);
        return view('backend.admin.trang.edit', compact('trang'));
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
        $trang = Trang::find($id);
        $name = $request->input('name');
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $order = $request->input('order');
        $noidung = $request->input('noidung');
        $idLoai = $request->input('idLoai');
        $motangan=$request->input('motangan');
        $file_anhdaidien = Input::file('anhdaidien');
        $file_anhmini = Input::file('anhmini');
        if ($file_anhdaidien) {
            File::delete('images/tintuc/' . $trang->anhdaidien);
            $filename_anhdaidien = get_filename_from_input($file_anhdaidien);
            $directory = "images/tintuc/";
            $file_anhdaidien->move($directory, $filename_anhdaidien);
            $trang->anhdaidien = $filename_anhdaidien;
        }
        if ($file_anhmini) {
            File::delete('images/tintuc/' . $trang->anhmini);
            $filename_anhmini = get_filename_from_input($file_anhmini);
            $directory = "images/tintuc/";
            $file_anhmini->move($directory, $filename_anhmini);
            $trang->anhmini = $filename_anhmini;
        }
        if (strlen(trim($order)) == 0)
            $trang->order = 1;
        else
            $trang->order = $order;
        $trang->name = $name;
        $trang->path=$path;
        $trang->noidung = $noidung;
        $trang->idLoai = $idLoai;
        $trang->motangan=$motangan;
        $trang->user_id = Auth::user()->id;
        $trang->save();
        return redirect()->route('trangs.index')
            ->with('success', 'Trang store successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trang = Trang::find($id);
        File::delete('images/tintuc/' . $trang->anhdaidien);
        File::delete('images/tintuc/' . $trang->anhmini);
        $trang->delete();
        return redirect()->route('trangs.index')
            ->with('success', 'Trang deleted successfully');
    }
}
