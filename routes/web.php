<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('frontend.trangchu.index');
//});
Route::get('/', 'FrontEndController@getAllTrangChu');
Route::get('/lien-he', function () {
    return view('frontend.lienhe.index');
});
Route::get('/dia-diem/{path}','DiaDiemFEController@getAllAlbumBelongToDiaDie');

Route::get('/album/{path}','AlbumFEController@chiTietAlbum');
Route::get('/album/', 'AlbumFEController@getAllAlbum');
Route::get('/album/dia-diem/{path}', 'AlbumFEController@getAlbumByDiaDiem');

Route::get('/bao-gia/', 'BaoGiaController@getAllBaoGia');
Route::get('/bao-gia/{path}', 'BaoGiaController@chiTietBaoGia');
Route::get('/phu-kien/', function () {
    return view('frontend.phukiencuoi.index');
});
Route::get('/phu-kien/trang-phuc/hien-dai', function () {
    return view('frontend.trangphuc.index');
});
/////BACKEND
Route::get('/sml_login', function () {
    return view('backend.login.login');
});
Route::get('/sml_login', function () {
    if (\Illuminate\Support\Facades\Auth::check())
        return redirect()->intended('sml_admin/dashboard');
    else
        return view('backend.login.login');
});
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('sml_logout', 'AuthController@logout')->name('logout');
Route::group(['middleware' => ['auth']], function () {
    //DASHBOARD
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    Route::resource('sml_admin/users', 'UserController');
    //Role
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);
    //Địa Điểm
    Route::get('sml_admin/dia_diem', ['as' => 'diadiems.index', 'uses' => 'DiaDiemController@index', 'middleware' => ['permission:diadiem-list|diadiem-create|diadiem-edit|diadiem-delete']]);
    Route::post('sml_admin/dia_diem/create', ['as' => 'diadiems.store', 'uses' => 'DiaDiemController@store', 'middleware' => ['permission:diadiem-create']]);
    Route::get('sml_admin/dia_diem/create', ['as' => 'diadiems.create', 'uses' => 'DiaDiemController@create', 'middleware' => ['permission:diadiem-create']]);
    Route::get('sml_admin/dia_diem/{id}/edit', ['as' => 'diadiems.edit', 'uses' => 'DiaDiemController@edit', 'middleware' => ['permission:diadiem-edit']]);
    Route::patch('sml_admin/dia_diem/{id}', ['as' => 'diadiems.update', 'uses' => 'DiaDiemController@update', 'middleware' => ['permission:diadiem-edit']]);
    Route::delete('sml_admin/dia_diem/{id}', ['as' => 'diadiems.destroy', 'uses' => 'DiaDiemController@destroy', 'middleware' => ['permission:diadiem-delete']]);
    //Dịch Vụ
    Route::get('sml_admin/dich_vu', ['as' => 'dichvus.index', 'uses' => 'DichVuController@index', 'middleware' => ['permission:dichvu-list|dichvu-create|dichvu-edit|dichvu-delete']]);
    Route::post('sml_admin/dich_vu/create', ['as' => 'dichvus.store', 'uses' => 'DichVuController@store', 'middleware' => ['permission:dichvu-create']]);
    Route::get('sml_admin/dich_vu/create', ['as' => 'dichvus.create', 'uses' => 'DichVuController@create', 'middleware' => ['permission:dichvu-create']]);
    Route::get('sml_admin/dich_vu/{id}/edit', ['as' => 'dichvus.edit', 'uses' => 'DichVuController@edit', 'middleware' => ['permission:dichvu-edit']]);
    Route::patch('sml_admin/dich_vu/{id}', ['as' => 'dichvus.update', 'uses' => 'DichVuController@update', 'middleware' => ['permission:dichvu-edit']]);
    Route::delete('sml_admin/dich_vu/{id}', ['as' => 'dichvus.destroy', 'uses' => 'DichVuController@destroy', 'middleware' => ['permission:dichvu-delete']]);
    //Phụ Kiện
    Route::get('sml_admin/phu_kien', ['as' => 'phukiens.index', 'uses' => 'PhuKienController@index', 'middleware' => ['permission:phukien-list|phukien-create|phukien-edit|phukien-delete']]);
    Route::post('sml_admin/phu_kien/create', ['as' => 'phukiens.store', 'uses' => 'PhuKienController@store', 'middleware' => ['permission:phukien-create']]);
    Route::get('sml_admin/phu_kien/create', ['as' => 'phukiens.create', 'uses' => 'PhuKienController@create', 'middleware' => ['permission:phukien-create']]);
    Route::get('sml_admin/phu_kien/{id}/edit', ['as' => 'phukiens.edit', 'uses' => 'PhuKienController@edit', 'middleware' => ['permission:phukien-edit']]);
    Route::patch('sml_admin/phu_kien/{id}', ['as' => 'phukiens.update', 'uses' => 'PhuKienController@update', 'middleware' => ['permission:phukien-edit']]);
    Route::delete('sml_admin/phu_kien/{id}', ['as' => 'phukiens.destroy', 'uses' => 'PhuKienController@destroy', 'middleware' => ['permission:phukien-delete']]);
    //Album
    Route::get('sml_admin/album', ['as' => 'albums.index', 'uses' => 'AlbumController@index', 'middleware' => ['permission:album-list|album-create|album-edit|album-delete']]);
    Route::post('sml_admin/album/create', ['as' => 'albums.store', 'uses' => 'AlbumController@store', 'middleware' => ['permission:album-create']]);
    Route::get('sml_admin/album/create', ['as' => 'albums.create', 'uses' => 'AlbumController@create', 'middleware' => ['permission:album-create']]);
    Route::get('sml_admin/album/{id}/edit', ['as' => 'albums.edit', 'uses' => 'AlbumController@edit', 'middleware' => ['permission:album-edit']]);
    Route::patch('sml_admin/album/{id}', ['as' => 'albums.update', 'uses' => 'AlbumController@update', 'middleware' => ['permission:album-edit']]);
    Route::delete('sml_admin/album/{id}', ['as' => 'albums.destroy', 'uses' => 'AlbumController@destroy', 'middleware' => ['permission:album-delete']]);
    //Slider
    Route::get('sml_admin/slider', ['as' => 'sliders.index', 'uses' => 'SliderController@index', 'middleware' => ['permission:slider-list|slider-create|slider-edit|slider-delete']]);
    Route::post('sml_admin/slider/create', ['as' => 'sliders.store', 'uses' => 'SliderController@store', 'middleware' => ['permission:slider-create']]);
    Route::get('sml_admin/slider/create', ['as' => 'sliders.create', 'uses' => 'SliderController@create', 'middleware' => ['permission:slider-create']]);
    Route::get('sml_admin/slider/{id}/edit', ['as' => 'sliders.edit', 'uses' => 'SliderController@edit', 'middleware' => ['permission:slider-edit']]);
    Route::patch('sml_admin/slider/{id}', ['as' => 'sliders.update', 'uses' => 'SliderController@update', 'middleware' => ['permission:slider-edit']]);
    Route::delete('sml_admin/slider/{id}', ['as' => 'sliders.destroy', 'uses' => 'SliderController@destroy', 'middleware' => ['permission:slider-delete']]);
    //Danh Mục Áo Cưới
    Route::get('sml_admin/danh-muc-ao-cuoi', ['as' => 'danhmucaocuois.index', 'uses' => 'DanhMucAoCuoiController@index', 'middleware' => ['permission:danhmucaocuoi-list|danhmucaocuoi-create|danhmucaocuoi-edit|danhmucaocuoi-delete']]);
    Route::post('sml_admin/danh-muc-ao-cuoi/create', ['as' => 'danhmucaocuois.store', 'uses' => 'DanhMucAoCuoiController@store', 'middleware' => ['permission:danhmucaocuoi-create']]);
    Route::get('sml_admin/danh-muc-ao-cuoi/create', ['as' => 'danhmucaocuois.create', 'uses' => 'DanhMucAoCuoiController@create', 'middleware' => ['permission:danhmucaocuoi-create']]);
    Route::get('sml_admin/danh-muc-ao-cuoi/{id}/edit', ['as' => 'danhmucaocuois.edit', 'uses' => 'DanhMucAoCuoiController@edit', 'middleware' => ['permission:danhmucaocuoi-edit']]);
    Route::patch('sml_admin/danh-muc-ao-cuoi/{id}', ['as' => 'danhmucaocuois.update', 'uses' => 'DanhMucAoCuoiController@update', 'middleware' => ['permission:danhmucaocuoi-edit']]);
    Route::delete('sml_admin/danh-muc-ao-cuoi/{id}', ['as' => 'danhmucaocuois.destroy', 'uses' => 'DanhMucAoCuoiController@destroy', 'middleware' => ['permission:danhmucaocuoi-delete']]);
    //Áo Cưới
    Route::get('sml_admin/ao-cuoi', ['as' => 'aocuois.index', 'uses' => 'AoCuoiController@index', 'middleware' => ['permission:aocuoi-list|aocuoi-create|aocuoi-edit|aocuoi-delete']]);
    Route::post('sml_admin/ao-cuoi/create', ['as' => 'aocuois.store', 'uses' => 'AoCuoiController@store', 'middleware' => ['permission:aocuoi-create']]);
    Route::get('sml_admin/ao-cuoi/create', ['as' => 'aocuois.create', 'uses' => 'AoCuoiController@create', 'middleware' => ['permission:aocuoi-create']]);
    Route::get('sml_admin/ao-cuoi/{id}/edit', ['as' => 'aocuois.edit', 'uses' => 'AoCuoiController@edit', 'middleware' => ['permission:aocuoi-edit']]);
    Route::patch('sml_admin/ao-cuoi/{id}', ['as' => 'aocuois.update', 'uses' => 'AoCuoiController@update', 'middleware' => ['permission:aocuoi-edit']]);
    Route::delete('sml_admin/ao-cuoi/{id}', ['as' => 'aocuois.destroy', 'uses' => 'AoCuoiController@destroy', 'middleware' => ['permission:aocuoi-delete']]);
});