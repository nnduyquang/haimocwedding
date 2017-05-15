@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Danh Mục Áo Cưới</h2>
            </div>
            <div class="pull-right">
                @permission(('danhmucaocuoi-create'))
                <a class="btn btn-success" href="{{ route('aocuois.create') }}"><i class="fa fa-plus"
                                                                                          aria-hidden="true"></i>
                    Tạo Mới Áo Cưới</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên Áo Cưới</th>
            <th>Ảnh</th>
            <th>Sắp Xếp</th>
            <th>Loại</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($aocuois as $key => $aocuoi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $aocuoi->name }}</td>
                <td>{{ $aocuoi->anhdaidien }}</td>
                <td>{{ $aocuoi->order }}</td>
                <td>Loại</td>
                <td>{{ $aocuoi->users->name }}</td>
                <td>
                    @permission(('aocuoi-edit'))
                    <a class="btn btn-primary" href="{{ route('aocuois.edit',$aocuoi->id) }}">Edit</a>
                    @endpermission
                    @permission(('aocuoi-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['aocuois.destroy', $aocuoi->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa áo cưới', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $aocuois->render() !!}

@stop