<?php

namespace App\Http\Requests;

use App\Album;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class AlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            case 'POST': {
                return [
                    'name' => 'required',
                    'mota' => 'required',
                    'anhdaidien' => 'required',
                    'arrayidphukien' => 'required',
                    'arrayiddichvu' => 'required',
                    'arraydiadiem' => 'required',
                    'tongthoigianchup' => 'required',
                    'quanaocodau' => 'required',
                    'soluonganhchup' => 'required',
                    'quanaochure' => 'required',
                    'images' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required',
                    'mota' => 'required',
                    'arrayidphukien' => 'required',
                    'arrayiddichvu' => 'required',
                    'arraydiadiem' => 'required',
                    'tongthoigianchup' => 'required',
                    'quanaocodau' => 'required',
                    'soluonganhchup' => 'required',
                    'quanaochure' => 'required',
                ];
            }
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Album Không Để Trống',
            'mota.required' => 'Mời Thêm Mô Tả',
            'anhdaidien.required' => 'Mời Chọn Ảnh Đại Diện',
            'arrayidphukien.required' => 'Mời Chọn Phụ Kiện',
            'arrayiddichvu.required' => 'Mời Chọn Dịch Vụ',
            'arraydiadiem.required' => 'Mời Chọn Địa Điểm',
            'tongthoigianchup.required' => 'Mời Nhập Thông Tin Tổng Thời Gian Chụp',
            'quanaocodau.required' => 'Mời Nhập Thông Tin Quần Áo Cô Dâu',
            'soluonganhchup.required' => 'Mời Nhập Thông Tin Số Lượng Ảnh Chụp',
            'quanaochure.required' => 'Mời Nhập Thông Tin Quần Áo Chú Rể',
            'images.required' => 'Mời Chọn Ảnh Album',
        ];
    }
    public function withValidator($validator)
    {
        if ($this->method() == 'POST') {
            $validator->after(function ($validator) {
                if ($this->checkIfExistValue()) {
                    $validator->errors()->add('name', 'Tên Album Đã Tồn Tại');
                }
            });
        }
    }
    public function checkIfExistValue()
    {
        $name = Input::get('name');
        $path = vn_str_co_dau_thanh_khong_dau($name);
        if (Album::where('path', '=', $path)->exists()) {
            return 1 == 1;
        } else {
            return 0 == 1;
        }
    }
}
