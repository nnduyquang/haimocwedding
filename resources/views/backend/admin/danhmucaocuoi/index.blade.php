@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Danh Mục Áo Cưới</h2>
            </div>
            <div class="pull-right">
                @permission(('danhmucaocuoi-create'))
                <a class="btn btn-success" href="{{ route('danhmucaocuois.create') }}"><i class="fa fa-plus"
                                                                                    aria-hidden="true"></i>
                    Tạo Mới Danh Mục Áo Cưới</a>
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
            <th>Tên Danh Mục Áo Cưới</th>
            <th>Path</th>
            <th>Sắp Xếp</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($danhmucaocuois as $key => $danhmucaocuoi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $danhmucaocuoi->name }}</td>
                <td>{{ $danhmucaocuoi->path }}</td>
                <td>{{ $danhmucaocuoi->order }}</td>
                <td>{{ $danhmucaocuoi->users->name }}</td>
                <td>
                    @permission(('danhmucaocuoi-edit'))
                    <a class="btn btn-primary" href="{{ route('danhmucaocuois.edit',$danhmucaocuoi->id) }}">Edit</a>
                    @endpermission
                    @permission(('danhmucaocuoi-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['danhmucaocuois.destroy', $danhmucaocuoi->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa danh mục áo cưới', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $danhmucaocuois->render() !!}

@stop