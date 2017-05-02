@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Địa Điểm</h2>
            </div>
            <div class="pull-right">
                @permission(('dichvu-create'))
                <a class="btn btn-success" href="{{ route('dichvus.create') }}"><i class="fa fa-plus"
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
            <th>Icon</th>
            <th>Tên Dịch Vụ</th>
            <th>Ghi Chú</th>
            <th>Sắp Xếp</th>
            <th>Tác Giả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dichvus as $key => $dichvu)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $dichvu->icon }}</td>
                <td>{{ $dichvu->name }}</td>
                <td>{{ $dichvu->note }}</td>
                <td>{{ $dichvu->order }}</td>
                <td>{{ $dichvu->users->name }}</td>
                <td>
                    @permission(('dichvu-edit'))
                    <a class="btn btn-primary" href="{{ route('dichvus.edit',$dichvu->id) }}">Edit</a>
                    @endpermission
                    @permission(('dichvu-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['dichvus.destroy', $dichvu->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Xóa Dịch Vụ', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
            </tr>
        @endforeach
    </table>
    {!! $dichvus->render() !!}

@stop