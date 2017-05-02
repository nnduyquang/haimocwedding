@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Địa Điểm</h2>
            </div>
            <div class="pull-right">
                @permission(('diadiem-create'))
                <a class="btn btn-success" href="{{ route('diadiems.create') }}"><i class="fa fa-plus"
                                                                                    aria-hidden="true"></i>
                    Tạo Mới Địa Điểm</a>
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
            <th>Tên Địa Điểm</th>
            <th>Path</th>
            <th>Sắp Xếp</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($diadiems as $key => $diadiem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $diadiem->name }}</td>
                <td>{{ $diadiem->path }}</td>
                <td>{{ $diadiem->order }}</td>
                <td>{{ $diadiem->users->name }}</td>
                <td>
                    @permission(('diadiem-edit'))
                    <a class="btn btn-primary" href="{{ route('diadiems.edit',$diadiem->id) }}">Edit</a>
                    @endpermission
                    @permission(('diadiem-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['diadiems.destroy', $diadiem->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa Địa Điểm', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $diadiems->render() !!}

@stop