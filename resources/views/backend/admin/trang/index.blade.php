@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Địa Điểm</h2>
            </div>
            <div class="pull-right">
                @permission(('trang-create'))
                <a class="btn btn-success" href="{{ route('trangs.create') }}"><i class="fa fa-plus"
                                                                                    aria-hidden="true"></i>
                    Tạo Mới Trang</a>
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
            <th>Tiêu Đề</th>
            <th>Loại</th>
            <th>Sắp Xếp</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($trangs as $key => $trang)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $trang->name }}</td>
                <td>Loại</td>
                <td>{{ $trang->order }}</td>
                <td>{{ $trang->users->name }}</td>
                <td>
                    @permission(('diadiem-edit'))
                    <a class="btn btn-primary" href="{{ route('trangs.edit',$trang->id) }}">Edit</a>
                    @endpermission
                    @permission(('diadiem-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['trangs.destroy', $trang->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa Trang', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $trangs->render() !!}

@stop