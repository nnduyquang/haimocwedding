@extends('frontend.master')
@section('slider')
    @include('frontend.chitiettintuc.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.chitiettintuc.info')
        </div>
    </div>
@stop