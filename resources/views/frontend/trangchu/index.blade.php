@extends('frontend.master')
@section('slider')
    @include('frontend.slider.slider')
@stop
@section('container')
    <div id="main-contain" class="container--is-home">
        <div class="container__inner">
            @include('frontend.trangchu.kehoachdenghi')
            @include('frontend.trangchu.khuvuc')
        </div>
    </div>
@stop
