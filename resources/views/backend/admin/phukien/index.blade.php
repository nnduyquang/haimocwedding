@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Phụ Kiện</h2>
            </div>
            <div class="pull-right">
                @permission(('phukien-create'))
                <a class="btn btn-success" href="{{ route('phukiens.create') }}"><i class="fa fa-plus"
                                                                                   aria-hidden="true"></i>
                    Tạo Mới Dịch Vu Đi Kèm</a>
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
            <th>Tên Phụ Kiện</th>
            <th>Sắp Xếp</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($phukiens as $key => $phukien)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $phukien->name }}</td>
                <td>{{ $phukien->order }}</td>
                <td>{{ $phukien->users->name }}</td>
                <td>
                    @permission(('phukien-edit'))
                    <a class="btn btn-primary" href="{{ route('phukiens.edit',$phukien->id) }}">Edit</a>
                    @endpermission
                    @permission(('phukien-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['phukiens.destroy', $phukien->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa Phụ Kiện', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $phukiens->render() !!}

@stop