@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Album</h2>
            </div>
            <div class="pull-right">
                @permission(('album-create'))
                <a class="btn btn-success" href="{{ route('albums.create') }}"><i class="fa fa-plus"
                                                                                    aria-hidden="true"></i>
                    Tạo Mới Album</a>
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
            <th>Tên Album</th>
            <th>Path</th>
            <th>Ảnh Đại Diện</th>
            <th>Số Lượng Ảnh</th>
            <th>Sắp Xếp</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($albums as $key => $album)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $album->name }}</td>
                <td>{{ $album->path }}</td>
                <td>{{ $album->anhdaidien }}</td>
                <td>SLL</td>
                <td>{{ $album->order }}</td>
                <td>{{ $album->users->name }}</td>
                <td>
                    @permission(('album-edit'))
                    <a class="btn btn-primary" href="{{ route('albums.edit',$album->id) }}">Edit</a>
                    @endpermission
                    @permission(('album-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['albums.destroy', $album->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa Album', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $albums->render() !!}

@stop