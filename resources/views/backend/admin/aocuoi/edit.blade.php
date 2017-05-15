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
    {!! Form::model($aocuoi,array('route' => ['aocuois.update',$aocuoi->id],'files'=>true,'enctype' => 'multipart/form-data','method'=>'PATCH')) !!}
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Tên Áo Cưới:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên Áo Cưới','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>STT:</strong>
                {!! Form::text('order', null, array('placeholder' => 'STT','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả:</strong>
                {!! Form::textarea('mota', null, array('placeholder' => 'Mô Tả','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Loại:</strong>
                {{ Form::radio('idloai', '1',true) }} Áo Cưới<br>
                {{ Form::radio('idloai', '2') }}Áo Dài
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chọn Hình Áo Cưới:</strong>
                {!! Form::file('anhdaidien',array('id'=>'chooseAnhAoCuoi','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('images/aocuoi/'.$aocuoi->anhdaidien,'',array('id'=>'showAnhAoCuoi','class'=>'showAnhAoCuoi'))}}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDichVu" type="submit" class="btn btn-primary">Cập Nhật Áo Cưới</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
