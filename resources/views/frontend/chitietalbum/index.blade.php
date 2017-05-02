@extends('frontend.master')
@section('slider')
    @include('frontend.chitietalbum.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.chitietalbum.info')
        </div>
    </div>
@stop