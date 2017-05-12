@extends('layouts.master')

@section('title', 'Tactic Center')

@section('content')
    <link href="{{ URL::asset('css/home/index.css')}}" rel="stylesheet">
    <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-5">
            <img id="field" src="{{URL::asset('images/field_blue.jpg')}}">
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
        </div>
    </div>
@stop


