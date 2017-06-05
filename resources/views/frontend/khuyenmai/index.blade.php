@extends('frontend.master')
@section('slider')
    @include('frontend.khuyenmai.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.khuyenmai.info')
        </div>
    </div>
@stop