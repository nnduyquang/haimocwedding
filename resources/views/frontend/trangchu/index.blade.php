@extends('frontend.master')
@section('slider')
    @include('frontend.slider.slider')
@stop
@section('container')
    <div id="container" class="container--is-home">
        <div class="container__inner">
            @include('frontend.trangchu.chiendich')
            @include('frontend.trangchu.kehoachdenghi')
            @include('frontend.trangchu.khuvuc')
        </div>
    </div>
@stop
