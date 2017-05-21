@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chỉnh Sửa Album</h2>
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
    {!! Form::model($album,array('route' => ['albums.update',$album->id],'files'=>true,'enctype' => 'multipart/form-data','id'=>'dropzoneForm','method'=>'PATCH')) !!}
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
                {!! Form::checkbox('IsCampaign', '0',  $album->IsCampaign==1?true:false) !!} Đây Là Báo Giá?
                {!! Form::text('price', null, array('placeholder' => 'Báo Giá','class' => 'form-control',$album->IsCampaign==0?'disabled=disabled':'')) !!}
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
                {{ Html::image('images/album/anhdaidien/'.$album->anhdaidien,'',array('id'=>'showAnhDaiDienAlbum'))}}
            </div>
            <div class="form-group">
                <strong>Ảnh Mini(650x410):</strong>
                {!! Form::file('anhmini',array('id'=>'chooseAnhMiniAlbum','class'=>'showAnhMiniAlbum','accept'=>'image/jpeg,image/jpg,image/png')) !!}
                {{ Html::image('images/album/anhdaidien/'.$album->anhmini,'',array('id'=>'showAnhMiniAlbum'))}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Địa Điểm Chụp</h3>
                @php
                    $arraydiadiem= $album->diadiems()->get();
                    $string_idDiaDiem='';
                    foreach ($arraydiadiem as $key=> $idDiadiem){
                        $string_idDiaDiem=$idDiadiem->pivot->id_diadiem.'-'.$string_idDiaDiem;
                    }
                @endphp
                @foreach ($diadiems as $key => $diadiem)
                    <div class="col-md-6">
                        @if (in_array($diadiem->id,explode("-",substr($string_idDiaDiem,0,-1)) ) !== false)
                            <input class="form-check-input" name="arraydiadiem[]" type="checkbox"
                                   id="idDiaDiem"
                                   value="{{$diadiem->id}}" checked="checked">
                        @else
                            <input class="form-check-input" name="arraydiadiem[]" type="checkbox"
                                   id="idDiaDiem"
                                   value="{{$diadiem->id}}">
                        @endif
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
                    @php
                        $arrayIdPhuKien=explode("-",$album->arrayidphukien);
                    @endphp
                    @foreach ($phukiens as $key => $phukien)
                        <div class="col-md-6">
                            @if (in_array($phukien->id,$arrayIdPhuKien ) !== false)
                                <input class="form-check-input" name="arrayidphukien[]" type="checkbox"
                                       id="idPhuKien"
                                       value="{{$phukien->id}}" checked="checked">
                            @else
                                <input class="form-check-input" name="arrayidphukien[]" type="checkbox"
                                       id="idPhuKien"
                                       value="{{$phukien->id}}">
                            @endif
                            {{$phukien->name}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Dịch Vụ Bao Gồm Trong Kế Hoạch</h3>
                @php
                    $arrayIdDichVu=explode("-",$album->arrayiddichvu);
                @endphp

                @foreach ($dichvus as $key => $dichvu)
                    <div class="col-md-6">
                        @if (in_array($dichvu->id,$arrayIdDichVu ) !== false)
                            <input class="form-check-input" name="arrayiddichvu[]" type="checkbox"
                                   id="idDichVu"
                                   value="{{$dichvu->id}}" checked="checked">
                        @else
                            <input class="form-check-input" name="arrayiddichvu[]" type="checkbox"
                                   id="idDichVu"
                                   value="{{$dichvu->id}}">
                        @endif
                        {{$dichvu->name}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Ảnh Album(1024px x 683px)</h3>
                <button id="btnThemAnhAlbum" class="btn btn-success" type="button"><i class="fa fa-plus"
                                                                                      aria-hidden="true"></i>
                    Thêm Ảnh Vào Album
                </button>
                <input id="input-id" name="images[]" type="file" class="file-loading" multiple data-show-upload="false"
                       data-show-caption="true">
                @foreach($imagemanagers as $key=>$imagemanager)
                    @php
                        $array_images=explode("+",$imagemanager->imagename);
                    @endphp
                    <div class="col-md-2">
                        {{ Html::image('images/album/'.$array_images[0].'/'.$imagemanager->imagename,'',array('class'=>'editHinhAlbum'))}}
                        <button id="is-remove-{{$imagemanager->id}}" type="button" data-id="1"
                                class="btn btn-primary is-remove"
                                value="{{$imagemanager->id}}">Xóa
                        </button>
                        <input id="is-remove-hd-{{$imagemanager->id}}" name="isremove[]" value="{{$imagemanager->id}}"
                               type="hidden">

                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ghi Chú Thêm:</strong>
                {!! Form::textarea('note', null, array('placeholder' => 'Ghi Chú','class' => 'form-control','rows'=>'5','style'=>'resize:none')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnCreateAlbum" type="submit" class="btn btn-primary">Cập Nhật Album</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
