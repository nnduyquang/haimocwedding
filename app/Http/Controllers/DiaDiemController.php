<?php

namespace App\Http\Controllers;

use App\DiaDiem;
use App\Http\Requests\DiaDiemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class DiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $diadiems = DiaDiem::orderBy('order', 'ASC')->paginate(5);
        return view('backend.admin.diadiem.index', compact('diadiems'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.diadiem.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiaDiemRequest $request)
    {
        $diadiem = new DiaDiem();
        $name = $request->input('name');
        $order = $request->input('order');
        $mota = $request->input('mota');
        $tieude1 = $request->input('tieude1');
        $tieude2 = $request->input('tieude2');
        $tieude3 = $request->input('tieude3');
        $mota1 = $request->input('mota1');
        $mota2 = $request->input('mota2');
        $mota3 = $request->input('mota3');
        $file_hinhnenphobien = Input::file('hinhnenphobien');
        $file_hinhnendiadiem = Input::file('hinhnendiadiem');
        $file_diadiem1 = Input::file('hinhdiadiem1');
        $file_diadiem2 = Input::file('hinhdiadiem2');
        $file_diadiem3 = Input::file('hinhdiadiem3');
        if (strlen(trim($request->input('order'))) == 0)
            $diadiem->order = 1;
        else
            $diadiem->order = $order;
        $file = Input::file('anhdaidien');
        $file_bando=Input::file('bando');
        $filename_bando=get_filename_from_input($file_bando);
        $directory = "images/diadiem/";
        $filename = get_filename_from_input($file);
        $file->move($directory, $filename);
        $file_bando->move($directory, $filename_bando);
        $diadiem->bando = $filename_bando;
        $diadiem->anhdaidien = $filename;
        $diadiem->name = $name;
        $diadiem->mota = $mota;
        $filename_diadiem1 = get_filename_from_input($file_diadiem1);
        $file_diadiem1->move($directory, $filename_diadiem1);
        $filename_diadiem2 = get_filename_from_input($file_diadiem2);
        $file_diadiem2->move($directory, $filename_diadiem2);
        $filename_diadiem3 = get_filename_from_input($file_diadiem3);
        $file_diadiem3->move($directory, $filename_diadiem3);
        $filename_hinhnenphobien = get_filename_from_input($file_hinhnenphobien);
        $file_hinhnenphobien->move($directory, $filename_hinhnenphobien);
        $filename_hinhnendiadiem = get_filename_from_input($file_hinhnendiadiem);
        $file_hinhnendiadiem->move($directory, $filename_hinhnendiadiem);
        $diadiem->tieude1 = $tieude1;
        $diadiem->mota1 = $mota1;
        $diadiem->hinhdiadiem1 = $filename_diadiem1;
        $diadiem->tieude1 = $tieude2;
        $diadiem->mota1 = $mota2;
        $diadiem->hinhdiadiem2 = $filename_diadiem2;
        $diadiem->tieude1 = $tieude3;
        $diadiem->mota1 = $mota3;
        $diadiem->hinhdiadiem3 = $filename_diadiem3;
        $diadiem->hinhnenphobien = $filename_hinhnenphobien;
        $diadiem->hinhnendiadiem = $filename_hinhnendiadiem;
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $diadiem->path = $path;
        $diadiem->user_id = Auth::user()->id;
        $diadiem->save();
        return redirect()->route('diadiems.index')
            ->with('success', 'Địa Điểm store successfully');
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
        $diadiem = DiaDiem::find($id);
        return view('backend.admin.diadiem.edit', compact('diadiem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiaDiemRequest $request, $id)
    {
        $diadiem = DiaDiem::find($id);
        $name = $request->input('name');
        $order = $request->input('order');
        $mota = $request->input('mota');
        $tieude1 = $request->input('tieude1');
        $tieude2 = $request->input('tieude2');
        $tieude3 = $request->input('tieude3');
        $mota1 = $request->input('mota1');
        $mota2 = $request->input('mota2');
        $mota3 = $request->input('mota3');
        $file_hinhnenphobien = Input::file('hinhnenphobien');
        $file_hinhnendiadiem = Input::file('hinhnendiadiem');
        $file_diadiem1 = Input::file('hinhdiadiem1');
        $file_diadiem2 = Input::file('hinhdiadiem2');
        $file_diadiem3 = Input::file('hinhdiadiem3');
        if (strlen(trim($request->input('order'))) == 0)
            $diadiem->order = 1;
        else
            $diadiem->order = $order;
        $file = Input::file('anhdaidien');
        $file_bando=Input::file('bando');
        if ($file) {
            File::delete('images/diadiem/' . $diadiem->anhdaidien);
            $directory = "images/diadiem/";
            $filename = get_filename_from_input($file);
            $file->move($directory, $filename);
            $diadiem->anhdaidien = $filename;
        }
        if ($file_bando) {
            File::delete('images/diadiem/' . $diadiem->bando);
            $directory = "images/diadiem/";
            $filename_bando = get_filename_from_input($file_bando);
            $file_bando->move($directory, $filename_bando);
            $diadiem->bando = $filename_bando;
        }
        if ($file_diadiem1) {
            File::delete('images/diadiem/' . $diadiem->hinhdiadiem1);
            $directory = "images/diadiem/";
            $filename_diadiem1 = get_filename_from_input($file_diadiem1);
            $file_diadiem1->move($directory, $filename_diadiem1);
            $diadiem->hinhdiadiem1 = $filename_diadiem1;
        }
        if ($file_diadiem2) {
            File::delete('images/diadiem/' . $diadiem->hinhdiadiem2);
            $directory = "images/diadiem/";
            $filename_diadiem2 = get_filename_from_input($file_diadiem2);
            $file_diadiem2->move($directory, $filename_diadiem2);
            $diadiem->hinhdiadiem2 = $filename_diadiem2;
        }
        if ($file_diadiem3) {
            File::delete('images/diadiem/' . $diadiem->hinhdiadiem3);
            $directory = "images/diadiem/";
            $filename_diadiem3 = get_filename_from_input($file_diadiem3);
            $file_diadiem3->move($directory, $filename_diadiem3);
            $diadiem->hinhdiadiem3 = $filename_diadiem3;
        }
        if ($file_hinhnenphobien) {
            File::delete('images/diadiem/' . $diadiem->hinhnenphobien);
            $directory = "images/diadiem/";
            $filename_hinhnenphobien = get_filename_from_input($file_hinhnenphobien);
            $file_hinhnenphobien->move($directory, $filename_hinhnenphobien);
            $diadiem->hinhnenphobien = $filename_hinhnenphobien;
        }
        if ($file_hinhnendiadiem) {
            File::delete('images/diadiem/' . $diadiem->hinhnendiadiem);
            $directory = "images/diadiem/";
            $filename_hinhnendiadiem = get_filename_from_input($file_hinhnendiadiem);
            $file_hinhnendiadiem->move($directory, $filename_hinhnendiadiem);
            $diadiem->hinhnendiadiem = $filename_hinhnendiadiem;
        }
        $diadiem->name = $name;
        $diadiem->mota = $mota;
        $diadiem->tieude1 = $tieude1;
        $diadiem->mota1 = $mota1;
        $diadiem->tieude2 = $tieude2;
        $diadiem->mota2 = $mota2;
        $diadiem->tieude3 = $tieude3;
        $diadiem->mota3 = $mota3;
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $diadiem->path = $path;
        $diadiem->user_id = Auth::user()->id;
        $diadiem->save();
        return redirect()->route('diadiems.index')
            ->with('success', 'Địa Điểm Cập Nhật successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diadiem = DiaDiem::find($id);
        File::delete('images/diadiem/' . $diadiem->hinhdiadiem1);
        File::delete('images/diadiem/' . $diadiem->hinhdiadiem2);
        File::delete('images/diadiem/' . $diadiem->hinhdiadiem3);
        File::delete('images/diadiem/' . $diadiem->hinhnenphobien);
        File::delete('images/diadiem/' . $diadiem->hinhnendiadiem);
        File::delete('images/diadiem/' . $diadiem->anhdaidien);
        $diadiem->delete();
        return redirect()->route('diadiems.index')
            ->with('success', 'Địa Điểm deleted successfully');
    }
}
