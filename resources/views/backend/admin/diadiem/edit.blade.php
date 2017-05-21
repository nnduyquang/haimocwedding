@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chỉnh Sửa Địa Điểm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('diadiems.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($diadiem,array('route' => ['diadiems.update',$diadiem->id],'method'=>'PATCH','files'=>true)) !!}
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Tên Danh Mục:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên Địa Điểm','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>STT:</strong>
                {!! Form::text('order', null, array('placeholder' => 'Số Thứ Tự','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả:</strong>
                {!! Form::textarea('mota', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ảnh Đại Diện(1366x504):</strong>
                {!! Form::file('anhdaidien',array('id'=>'chooseHinhDiaDiem','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('images/diadiem/'.$diadiem->anhdaidien,'',array('id'=>'showHinhDiaDiem'))}}
            </div>
            <div class="form-group">
                <strong>Bản Đồ:</strong>
                {!! Form::file('bando',array('id'=>'chooseBanDo','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('images/diadiem/'.$diadiem->bando,'',array('id'=>'showBanDo'))}}
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Địa Điểm Chụp Ảnh Phổ Biến</h2>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tên Địa Điểm 1</strong>
                                {!! Form::text('tieude1', null, array('placeholder' => 'Tên Địa Điểm','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Mô Tả 1</strong>
                                {!! Form::textarea('mota1', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Hình Đại Diện(650x432)</strong>
                                {!! Form::file('hinhdiadiem1',array('id'=>'chooseHinhDiaDiem1','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                                {{ Html::image('images/diadiem/'.$diadiem->hinhdiadiem1,'',array('id'=>'showHinhDiaDiem1','class'=>'showHinhDiaDiem'))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tên Địa Điểm 2</strong>
                                {!! Form::text('tieude2', null, array('placeholder' => 'Tên Địa Điểm','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Mô Tả 2</strong>
                                {!! Form::textarea('mota2', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Hình Đại Diện(650x432)</strong>
                                {!! Form::file('hinhdiadiem2',array('id'=>'chooseHinhDiaDiem2','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                                {{ Html::image('images/diadiem/'.$diadiem->hinhdiadiem2,'',array('id'=>'showHinhDiaDiem2','class'=>'showHinhDiaDiem'))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tên Địa Điểm 3</strong>
                                {!! Form::text('tieude3', null, array('placeholder' => 'Tên Địa Điểm','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Mô Tả 3</strong>
                                {!! Form::textarea('mota3', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Hình Đại Diện(650x432)</strong>
                                {!! Form::file('hinhdiadiem3',array('id'=>'chooseHinhDiaDiem3','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                                {{ Html::image('images/diadiem/'.$diadiem->hinhdiadiem3,'',array('id'=>'showHinhDiaDiem3','class'=>'showHinhDiaDiem'))}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Hình Nền Phổ Biến(1304x572)</strong>
                {!! Form::file('hinhnenphobien',array('id'=>'chooseHinhNenPhoBien','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('images/diadiem/'.$diadiem->hinhnenphobien,'',array('id'=>'showHinhNenPhoBien','class'=>'showHinhNen'))}}
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Hình Nền Địa Điểm(489x360)</strong>
                {!! Form::file('hinhnendiadiem',array('id'=>'chooseHinhNenDiaDiem','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('images/diadiem/'.$diadiem->hinhnendiadiem,'',array('id'=>'showHinhNenDiaDiem','class'=>'showHinhNen'))}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDiaDiem" type="submit" class="btn btn-primary">Cập Nhật Địa Điểm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
