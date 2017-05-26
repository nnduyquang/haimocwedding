@extends('frontend.master')
@section('slider')
    @include('frontend.chitiettintuc.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.chitietkhuyenmai.info')
        </div>
    </div>
@stop