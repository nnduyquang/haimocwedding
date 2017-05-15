<?php

namespace App\Http\Controllers;

use App\AoCuoi;
use Illuminate\Http\Request;

class AoCuoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aocuois = AoCuoi::orderBy('order', 'ASC')->paginate(5);
        return view('backend.admin.aocuoi.index', compact('aocuois'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.aocuoi.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aocuoi = new AoCuoi();
        $name = $request->input('name');
        $order = $request->input('order');
        $mota = $request->input('mota');
        $idloai = $request->input('idloai');
        $file_anhdaidien = Input::file('anhdaidien');
        $filename = get_filename_from_input($file_anhdaidien);
        $directory = "images/aocuoi/";
        $file_anhdaidien->move($directory, $filename);
        if (strlen(trim($order)) == 0)
            $aocuoi->order = 1;
        else
            $aocuoi->order = $order;
        $aocuoi->name = $name;
        $aocuoi->mota = $mota;
        $aocuoi->anhdaidien = $filename;
        $aocuoi->danhmucaocuoi_id = $idloai;
        $aocuoi->user_id = Auth::user()->id;
        $aocuoi->save();
        return redirect()->route('aocuois.index')
            ->with('success', 'Áo Cưới store successfully');
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
        $aocuoi = AoCuoi::find($id);
        return view('backend.admin.aocuoi.edit', compact('aocuoi'));
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
        $aocuoi = AoCuoi::find($id);
        $name = $request->input('name');
        $order = $request->input('order');
        $mota = $request->input('mota');
        $idloai = $request->input('idloai');
        $file_anhdaidien = Input::file('anhdaidien');
        if ($file_anhdaidien) {
            File::delete('images/aocuoi/' . $aocuoi->anhdaidien);
            $filename = get_filename_from_input($file_anhdaidien);
            $directory = "images/aocuoi/";
            $file_anhdaidien->move($directory, $filename);
            $aocuoi->anhdaidien = $filename;
        }
        if (strlen(trim($order)) == 0)
            $aocuoi->order = 1;
        else
            $aocuoi->order = $order;
        $aocuoi->name = $name;
        $aocuoi->mota = $mota;
        $aocuoi->anhdaidien = $filename;
        $aocuoi->danhmucaocuoi_id = $idloai;
        $aocuoi->user_id = Auth::user()->id;
        $aocuoi->save();
        return redirect()->route('aocuois.index')
            ->with('success', 'Áo Cưới update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aocuoi = DanhMucAoCuoi::find($id);
        File::delete('images/aocuoi/' . $aocuoi->anhdaidien);
        $aocuoi->delete();
        return redirect()->route('aocuois.index')
            ->with('success', 'Áo Cưới deleted successfully');
    }
}
