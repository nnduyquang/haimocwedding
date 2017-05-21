<?php

namespace App\Http\Controllers;

use App\Album;
use App\DiaDiem;
use App\DichVu;
use App\Http\Requests\AlbumRequest;
use App\ImageManager;
use App\PhuKien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $albums = Album::orderBy('order', 'ASC')->paginate(5);
        return view('backend.admin.album.index', compact('albums'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dichvus = $this->create_get_all_dichvu();
        $phukiens = $this->create_get_all_phukien();
        $diadiems = $this->create_get_all_diadiem();
        return view('backend.admin.album.create', compact(['roles', 'dichvus', 'phukiens', 'diadiems']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(AlbumRequest $request)
    {
        $album = new Album();
        $name = $request->input('name');
        $mota = $request->input('mota');
        if ($request->has('IsCampaign')) {
            $album->IsCampaign = 1;
            $album->price = $request->input('price');
        } else {
            $album->IsCampaign = 0;
            $album->price = '';
        }
        $tongthoigianchup = $request->input('tongthoigianchup');
        $soluonganhchup = $request->input('soluonganhchup');
        $quanaocodau = $request->input('quanaocodau');
        $quanaochure = $request->input('quanaochure');
        $note = $request->input('note');
        $order = $request->input('order');
        $arrayidphukien = $request->input('arrayidphukien');
        $arrayiddichvu = $request->input('arrayiddichvu');
        $arraydiadiem = $request->input('arraydiadiem');
        $file_anhdaidien = Input::file('anhdaidien');
        $file_anhmini = Input::file('anhmini');
        $filename_anhdaidien = get_filename_from_input($file_anhdaidien);
        $filename_mini = get_filename_from_input($file_anhmini);
        $directory = "images/album/anhdaidien";
        $file_anhdaidien->move($directory, $filename_anhdaidien);
        $file_anhmini->move($directory, $filename_mini);
        $list_images = Input::file('images');
        $album->name = $name;
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $album->path = $path;
        $album->mota = $mota;
        $album->anhdaidien = $filename_anhdaidien;
        $album->anhmini = $filename_mini;
        $album->tongthoigianchup = $tongthoigianchup;
        $album->soluonganhchup = $soluonganhchup;
        $album->quanaocodau = $quanaocodau;
        $album->quanaochure = $quanaochure;
        $album->note = $note;
        if (strlen(trim($request->input('order'))) == 0)
            $album->order = 1;
        else
            $album->order = $order;
        $string_idPhuKien = "";
        $string_idDichVu = "";
        foreach ($arrayidphukien as $idphukien) {
            $string_idPhuKien = $idphukien . '-' . $string_idPhuKien;
        }
        foreach ($arrayiddichvu as $iddichvu) {
            $string_idDichVu = $iddichvu . '-' . $string_idDichVu;
        }
        $album->arrayidphukien = substr($string_idPhuKien, 0, -1);
        $album->arrayiddichvu = substr($string_idDichVu, 0, -1);
        $album->user_id = Auth::user()->id;
        $album->save();
        $album->diadiems()->attach($arraydiadiem);
        $pathImage = "images/album/" . $album->id;
        $listimagemanage = array();
        foreach ($list_images as $file_image) {
            $filename_image = get_filename_from_input($file_image);
            $filename_image = $album->id . '+' . $filename_image;
            $item = array(
                'imagename' => $filename_image,
                'id_album' => $album->id
            );
            $listimagemanage[] = $item;
            $file_image->move($pathImage, $filename_image);
        }
        DB::table('imagemanagers')->insert($listimagemanage);
        return redirect()->route('albums.index')
            ->with('success', 'Album store successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dichvus = $this->create_get_all_dichvu();
        $phukiens = $this->create_get_all_phukien();
        $diadiems = $this->create_get_all_diadiem();
        $imagemanagers = ImageManager::where('id_album', $id)->get();
        $album = Album::find($id);
        return view('backend.admin.album.edit', compact(['album', 'dichvus', 'phukiens', 'diadiems', 'imagemanagers']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumRequest $request, $id)
    {
        $album = Album::find($id);
        $name = $request->input('name');
        $mota = $request->input('mota');
        if ($request->has('IsCampaign')) {
            $album->IsCampaign = 1;
            $album->price = $request->input('price');
        } else {
            $album->IsCampaign = 0;
            $album->price = '';
        }
        $tongthoigianchup = $request->input('tongthoigianchup');
        $soluonganhchup = $request->input('soluonganhchup');
        $quanaocodau = $request->input('quanaocodau');
        $quanaochure = $request->input('quanaochure');
        $note = $request->input('note');
        $order = $request->input('order');
        $arrayidphukien = $request->input('arrayidphukien');
        $arrayiddichvu = $request->input('arrayiddichvu');
        $arraydiadiem = $request->input('arraydiadiem');
        $album->diadiems()->sync($arraydiadiem);
        $file_anhdaidien = Input::file('anhdaidien');
        $file_anhmini = Input::file('anhmini');
        if ($file_anhmini) {
            File::delete('images/album/anhdaidien/' . $album->anhmini);
            $filename_anhmini = get_filename_from_input($file_anhmini);
            $directory = "images/album/anhdaidien";
            $file_anhmini->move($directory, $filename_anhmini);
            $album->anhmini = $filename_anhmini;
        }
        if ($file_anhdaidien) {
            File::delete('images/album/anhdaidien/' . $album->anhdaidien);
            $filename_anhdaidien = get_filename_from_input($file_anhdaidien);
            $directory = "images/album/anhdaidien";
            $file_anhdaidien->move($directory, $filename_anhdaidien);
            $album->anhdaidien = $filename_anhdaidien;
        }
        $list_images = Input::file('images');
        $pathImage = "images/album/" . $album->id;
        if ($list_images) {
            foreach ($list_images as $file_image) {
                $filename_image = get_filename_from_input($file_image);
                $filename_image = $album->id . '+' . $filename_image;
                $item = array(
                    'imagename' => $filename_image,
                    'id_album' => $album->id
                );
                $listimagemanage[] = $item;
                $file_image->move($pathImage, $filename_image);
            }
            DB::table('imagemanagers')->insert($listimagemanage);
        }
        $arrayremoveimage = $request->input('isremove');
        foreach ($arrayremoveimage as $removeimageId) {
            $arrayId = explode('-', $removeimageId);
            if (count($arrayId) == 2) {
                $imagemager = ImageManager::find($arrayId[0]);
                $path = public_path() . '/images/album/' . explode("+", $imagemager->imagename)[0] . '/' . $imagemager->imagename;
                File::delete('images/album/' . explode("+", $imagemager->imagename)[0] . '/' . $imagemager->imagename);
                $imagemager->delete();
            }
        }
        $album->name = $name;
        $path = vn_str_co_dau_thanh_khong_dau($name);
        $album->path = $path;
        $album->mota = $mota;
        $album->tongthoigianchup = $tongthoigianchup;
        $album->soluonganhchup = $soluonganhchup;
        $album->quanaocodau = $quanaocodau;
        $album->quanaochure = $quanaochure;
        $album->note = $note;
        if (strlen(trim($request->input('order'))) == 0)
            $album->order = 1;
        else
            $album->order = $order;
        $string_idPhuKien = "";
        $string_idDichVu = "";
        foreach ($arrayidphukien as $idphukien) {
            $string_idPhuKien = $idphukien . '-' . $string_idPhuKien;
        }
        foreach ($arrayiddichvu as $iddichvu) {
            $string_idDichVu = $iddichvu . '-' . $string_idDichVu;
        }
        $album->arrayidphukien = substr($string_idPhuKien, 0, -1);
        $album->arrayiddichvu = substr($string_idDichVu, 0, -1);
        $album->user_id = Auth::user()->id;
        $album->save();
        return redirect()->route('albums.index')
            ->with('success', 'Album Cập Nhật successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function create_get_all_dichvu()
    {
        $dichvus = DichVu::all()->sortBy('order');
        return $dichvus;
    }

    public function create_get_all_phukien()
    {
        $phukiens = PhuKien::all()->sortBy('order');
        return $phukiens;
    }

    public function create_get_all_diadiem()
    {
        $diadiems = DiaDiem::all()->sortBy('order');
        return $diadiems;
    }
}
