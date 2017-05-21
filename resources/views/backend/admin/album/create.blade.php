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
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>STT:</strong>
                {!! Form::text('order', null, array('placeholder' => 'STT','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::checkbox('IsCampaign', '0', false) !!} Đây Là Báo Giá?
                <strong>Giá:</strong>
                {!! Form::text('price', null, array('placeholder' => 'Báo Giá','class' => 'form-control','disabled'=>'disabled')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả:</strong>
                {!! Form::textarea('mota', null, array('placeholder' => 'Mô Tả Ngắn','class' => 'form-control','rows'=>'5','style'=>'resize:none','id'=>'summernote-album')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ảnh Đại Diện(1366x504):</strong>
                {!! Form::file('anhdaidien',array('id'=>'chooseAnhDaiDienAlbum','class'=>'showAnhDaiDienAlbum','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('','',array('id'=>'showAnhDaiDienAlbum'))}}
            </div>
            <div class="form-group">
                <strong>Ảnh Mini(650x410):</strong>
                {!! Form::file('anhmini',array('id'=>'chooseAnhMiniAlbum','class'=>'showAnhMiniAlbum','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('','',array('id'=>'showAnhMiniAlbum'))}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Địa Điểm Chụp</h3>
                @foreach ($diadiems as $key => $diadiem)
                    <div class="col-md-6">
                        <input class="form-check-input" name="arraydiadiem[]" type="checkbox"
                               id="idDiaDiem"
                               value="{{$diadiem->id}}">
                        {{$diadiem->name}}
                    </div>
                @endforeach
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
                    @foreach ($phukiens as $key => $phukien)
                    <div class="col-md-6">
                        <input class="form-check-input" name="arrayidphukien[]" type="checkbox"
                               id="idPhuKien"
                               value="{{$phukien->id}}">
                        {{$phukien->name}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Dịch Vụ Bao Gồm Trong Kế Hoạch</h3>
                @foreach ($dichvus as $key => $dichvu)
                <div class="col-md-6">
                    <input class="form-check-input" name="arrayiddichvu[]" type="checkbox"
                           id="idDichVu"
                           value="{{$dichvu->id}}">
                    {{$dichvu->name}}
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Ảnh Album(1024px x 683px)</h3>
                <a id="btnThemAnhAlbum" class="btn btn-success" href="#"><i class="fa fa-plus" aria-hidden="true"></i>
                    Thêm Ảnh Vào Album
                </a>
                <input id="input-id" name="images[]" type="file" class="file-loading" multiple data-show-upload="false" data-show-caption="true">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ghi Chú Thêm:</strong>
                {!! Form::textarea('note', null, array('placeholder' => 'Ghi Chú','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnCreateAlbum" type="submit" class="btn btn-primary">Tạo Album</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
