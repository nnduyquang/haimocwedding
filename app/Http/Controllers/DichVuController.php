<?php

namespace App\Http\Controllers;

use App\DichVu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dichvus = DichVu::orderBy('order', 'ASC')->paginate(5);
        return view('backend.admin.dichvukemtheo.index', compact('dichvus'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.dichvukemtheo.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dichvu = new DichVu();
        $name = $request->input('name');
        $order = $request->input('order');
        $note = $request->input('note');
        $file_icon = Input::file('icon');
        $filename = get_filename_from_input($file_icon);
        $directory = "images/dichvu/";
        $file_icon->move($directory, $filename);
        if (strlen(trim($order)) == 0)
            $dichvu->order = 1;
        else
            $dichvu->order = $order;
        $dichvu->name = $name;
        $dichvu->note = $note;
        $dichvu->icon = $filename;
        $dichvu->user_id = Auth::user()->id;
        $dichvu->save();
        return redirect()->route('dichvus.index')
            ->with('success', 'Dịch Vụ store successfully');

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
        $dichvu = DichVu::find($id);
        return view('backend.admin.dichvukemtheo.edit', compact('dichvu'));
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
        $dichvu = DichVu::find($id);
        $name = $request->input('name');
        $note = $request->input('note');
        $order = $request->input('order');
        $file_icon = Input::file('icon');
        if ($file_icon) {
            File::delete('images/dichvu/' . $dichvu->icon);
            $filename = get_filename_from_input($file_icon);
            $directory = "images/dichvu/";
            $file_icon->move($directory, $filename);
            $dichvu->icon = $filename;
        }
        if (strlen(trim($order)) == 0)
            $dichvu->order = 1;
        else
            $dichvu->order = $order;
        $dichvu->name = $name;
        $dichvu->note = $note;
        $dichvu->user_id = Auth::user()->id;
        $dichvu->save();
        return redirect()->route('dichvus.index')
            ->with('success', 'Dịch Vụ update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dichvu = DichVu::find($id);
        File::delete('images/dichvu/' . $dichvu->icon);
        $dichvu->delete();
        return redirect()->route('dichvus.index')
            ->with('success', 'Dịch Vụ deleted successfully');
    }
}
