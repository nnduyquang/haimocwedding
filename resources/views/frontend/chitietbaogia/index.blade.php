@extends('frontend.master')
@section('slider')
    @include('frontend.chitietbaogia.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.chitietbaogia.info')
        </div>
    </div>
@stop