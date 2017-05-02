@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Dịch Vụ</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dichvus.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'dichvus.store','method'=>'POST','files'=>true)) !!}
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Tên Dịch Vụ:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên Dịch Vụ','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ghi Chú:</strong>
                {!! Form::text('note', null, array('placeholder' => 'Ghi Chú','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>STT:</strong>
                {!! Form::text('order', null, array('placeholder' => 'Ghi Chú','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Icon:</strong>
                {!! Form::file('icon',array('id'=>'chooseIcon','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('','',array('id'=>'showIcon','class'=>'showIcon'))}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDichVu" type="submit" class="btn btn-primary">Tạo Mới Dịch Vụm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
