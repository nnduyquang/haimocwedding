@extends('frontend.master')
@section('slider')
    @include('frontend.diadiem.header')
@stop
@section('container')
    <div id="main-contain" class="container--is-photo">
        <div class="container__inner">
            @include('frontend.diadiem.info')
        </div>
    </div>
@stop