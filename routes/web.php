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

Route::get('/', function () {
    return view('frontend.trangchu.index');
});
Route::get('/lien-he', function () {
    return view('frontend.lienhe.index');
});
Route::get('/dia-diem/tokyo', function () {
    return view('frontend.diadiem.index');
});
Route::get('/album/ancient-and-modern-tokyo', function () {
    return view('frontend.chitietalbum.index');
});
Route::get('/album/', function () {
    return view('frontend.tatcaalbum.index');
});
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
});