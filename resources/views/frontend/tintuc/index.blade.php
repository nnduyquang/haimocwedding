@extends('frontend.master')
@section('slider')
    @include('frontend.tintuc.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.tintuc.info')
        </div>
    </div>
@stop