@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Danh Mục Áo Cưới</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('danhmucaocuois.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'danhmucaocuois.store','method'=>'POST','files'=>true)) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên Danh Mục Áo Cưới:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên Danh Mục Áo Cưới','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả:</strong>
                {!! Form::textarea('mota', null, array('placeholder' => 'Mô Tả','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>STT:</strong>
                {!! Form::text('order', null, array('placeholder' => 'STT','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chọn Hình Đại Diện:</strong>
                {!! Form::file('anhdaidien',array('id'=>'chooseAnhDaiDienDanhMuc','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('','',array('id'=>'showAnhDaiDienDanhMuc','class'=>'showAnhDaiDienDanhMuc'))}}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDichVu" type="submit" class="btn btn-primary">Thêm Danh Mục Áo Cưới</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
