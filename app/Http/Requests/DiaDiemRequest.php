<?php

namespace App\Http\Requests;

use App\DiaDiem;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class DiaDiemRequest extends FormRequest
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
                    'anhdaidien' => 'required',
                    'hinhdiadiem1' => 'required',
                    'hinhdiadiem2' => 'required',
                    'hinhdiadiem3' => 'required',
                    'tieude1' => 'required',
                    'tieude2' => 'required',
                    'tieude3' => 'required',
                    'mota1' => 'required',
                    'mota2' => 'required',
                    'mota3' => 'required',
                    'hinhnenphobien' => 'required',
                    'hinhnendiadiem' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required',
                ];
            }
        }
    }
    public function attributes()
    {
        return [
            'tieude' => 'Tên danh mục'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên Địa Điểm Không Để Trống',
            'anhdaidien.required' => 'Mời Thêm Ảnh Đại Diện Địa Điểm',
            'hinhdiadiem1.required' => 'Mời Thêm Ảnh Địa Điểm 1',
            'hinhdiadiem2.required' => 'Mời Thêm Ảnh Địa Điểm 2',
            'hinhdiadiem3.required' => 'Mời Thêm Ảnh Địa Điểm 3',
            'mota1.required' => 'Mời Nhập Mô Tả Cho Địa Điểm 1',
            'mota2.required' => 'Mời Nhập Mô Tả Cho Địa Điểm 2',
            'mota3.required' => 'Mời Nhập Mô Tả Cho Địa Điểm 3',
            'tieude1.required' => 'Mời Nhập Tiêu Đề Cho Địa Điểm 1',
            'tieude2.required' => 'Mời Nhập Tiêu Đề Cho Địa Điểm 2',
            'tieude3.required' => 'Mời Nhập Tiêu Đề Cho Địa Điểm 3',
            'hinhnenphobien.required' => 'Mời Thêm Ảnh Nền Phổ Biến',
            'hinhnendiadiem.required' => 'Mời Thêm Ảnh Nền Địa Điểm',

        ];
    }
    public function withValidator($validator)
    {
        if ($this->method() == 'POST') {
            $validator->after(function ($validator) {
                if ($this->checkIfExistValue()) {
                    $validator->errors()->add('name', 'Tên Địa Điểm Đã Tồn Tại');
                }
            });
        }
    }
    public function checkIfExistValue()
    {
        $display_name = Input::get('name');
        $path = vn_str_co_dau_thanh_khong_dau($display_name);
        if (DiaDiem::where('path', '=', $path)->exists()) {
            return 1 == 1;
        } else {
            return 0 == 1;
        }
    }
}
