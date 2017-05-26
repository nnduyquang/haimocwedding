@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Trang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('trangs.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'trangs.store','files'=>true,'enctype' => 'multipart/form-data')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên Trang:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên Trang','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>STT:</strong>
                {!! Form::text('order', null, array('placeholder' => 'STT','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Loại:</strong>
                <br>{{ Form::radio('idLoai', '1',true) }}Tin Tức<br>
                {{ Form::radio('idLoai', '0') }}Sự Kiện<br>
                {{ Form::radio('idLoai', '2') }}Giới Thiệu
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả Ngắn</strong>
                {!! Form::textarea('motangan', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nội dung:</strong>
                {!! Form::textarea('noidung', null, array('placeholder' => 'Nội Dung','class' => 'form-control','rows'=>'5','style'=>'resize:none','id'=>'summernote-trang')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chọn Ảnh Nhỏ:</strong>
                {!! Form::file('anhmini',array('id'=>'chooseAnhMini','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('','',array('id'=>'showAnhMini','class'=>'showAnhMini'))}}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chọn Hình Đại Diện:</strong>
                {!! Form::file('anhdaidien',array('id'=>'chooseAnhDaiDienTrang','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('','',array('id'=>'showAnhDaiDienTrang','class'=>'showAnhDaiDienTrang'))}}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnTrang" type="submit" class="btn btn-primary">Thêm Mới Trang</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
