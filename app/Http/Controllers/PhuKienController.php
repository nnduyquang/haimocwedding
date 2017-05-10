<?php

namespace App\Http\Controllers;

use App\PhuKien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class PhuKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $phukiens = PhuKien::orderBy('order', 'ASC')->paginate(5);
        return view('backend.admin.phukien.index', compact('phukiens'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.phukien.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phukien = new PhuKien();
        $name = $request->input('name');
        $order = $request->input('order');
        if (strlen(trim($order)) == 0)
            $phukien->order = 1;
        else
            $phukien->order = $order;
        $phukien->name = $name;
        $phukien->user_id = Auth::user()->id;
        $phukien->save();
        return redirect()->route('phukiens.index')
            ->with('success', 'Phụ Kiện store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phukien = PhuKien::find($id);
        return view('backend.admin.phukien.edit', compact('phukien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phukien = PhuKien::find($id);
        $name = $request->input('name');
        $order = $request->input('order');
        if (strlen(trim($order)) == 0)
            $phukien->order = 1;
        else
            $phukien->order = $order;
        $phukien->name = $name;
        $phukien->user_id = Auth::user()->id;
        $phukien->save();
        return redirect()->route('phukiens.index')
            ->with('success', 'Phụ Kiện update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phukien = PhuKien::find($id);
        $phukien->delete();
        return redirect()->route('phukiens.index')
            ->with('success', 'Phụ Kiện deleted successfully');
    }
}
