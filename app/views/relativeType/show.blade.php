@extends('relativeType.master')

@section('title')
@parent
:: Relative Type
@stop

@section('content')


<h1>Showing: {{ $RelativeType->type }}</h1>


@stop