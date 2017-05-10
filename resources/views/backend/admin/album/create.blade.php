@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Album</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('albums.index') }}"> Back</a>
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
    {!! Form::open(array('files'=>true,'enctype' => 'multipart/form-data','id'=>'dropzoneForm')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên Album:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên Album','class' => 'form-control')) !!}
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
                <h3>Chi Tiết Kế Hoạch</h3>
                <div class="col-md-6">
                    <strong>Tổng Thời Gian Chụp:</strong>
                    {!! Form::text('tongthoigianchup', null, array('placeholder' => 'Tổng Thời Gian Chụp','class' => 'form-control')) !!}
                </div>
                <div class="col-md-6">
                    <strong>Số Lượng Ảnh Chụp:</strong>
                    {!! Form::text('soluonganhchup', null, array('placeholder' => 'Số Lượng Ảnh Chụp','class' => 'form-control')) !!}
                </div>
                <div class="col-md-6">
                    <strong>Đồ Cô Dâu:</strong>
                    {!! Form::text('quanaocodau', null, array('placeholder' => 'Quần Áo Cô Dâu','class' => 'form-control')) !!}
                </div>
                <div class="col-md-6">
                    <strong>Đồ Chú Rể:</strong>
                    {!! Form::text('quanaochure', null, array('placeholder' => 'Quần Áo Chú Rể','class' => 'form-control')) !!}
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <input class="form-check-input" name="plandetails[]" type="checkbox"
                               id="inlineCheckbox1"
                               value="1">
                        abc
                    </div>
                    <div class="col-md-6">
                        <input class="form-check-input" name="plandetails[]" type="checkbox"
                               id="inlineCheckbox1"
                               value="1">
                        abc
                    </div>
                    <div class="col-md-6">
                        <input class="form-check-input" name="plandetails[]" type="checkbox"
                               id="inlineCheckbox1"
                               value="1">
                        abc
                    </div>
                    <div class="col-md-6">
                        <input class="form-check-input" name="plandetails[]" type="checkbox"
                               id="inlineCheckbox1"
                               value="1">
                        abc
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Dịch Vụ Bao Gồm Trong Kế Hoạch</h3>
                <div class="col-md-6">
                    <input class="form-check-input" name="dichvus[]" type="checkbox"
                           id="inlineCheckbox1"
                           value="1">
                    Dịch Vụ 1
                </div>
                <div class="col-md-6">
                    <input class="form-check-input" name="dichvus[]" type="checkbox"
                           id="inlineCheckbox1"
                           value="2">
                    Dịch Vụ 2
                </div>
                <div class="col-md-6">
                    <input class="form-check-input" name="dichvus[]" type="checkbox"
                           id="inlineCheckbox1"
                           value="3">
                    Dịch Vụ 3
                </div>
                <div class="col-md-6">
                    <input class="form-check-input" name="dichvus[]" type="checkbox"
                           id="inlineCheckbox1"
                           value="4">
                    Dịch Vụ 4
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Ảnh Album</h3>
                <a id="btnThemAnhAlbum" class="btn btn-success" href="#"><i class="fa fa-plus" aria-hidden="true"></i>
                    Thêm Ảnh Vào Album
                </a>
                {{--<div id="dropzonePreview" CLASS="dropzone">--}}
                    {{--<div class="dz-message">Drag&drop</div>--}}
                {{--</div>--}}

                <input id="input-id" name="input2[]" type="file" class="file-loading" multiple data-show-upload="false" data-show-caption="true">

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnCreateAlbum" type="submit" class="btn btn-primary">Tạo Album</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
