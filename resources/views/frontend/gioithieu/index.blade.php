@extends('frontend.master')
@section('slider')
    @include('frontend.gioithieu.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.gioithieu.info')
        </div>
    </div>
@stop