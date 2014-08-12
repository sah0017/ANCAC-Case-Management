@extends('address.master')

@section('title')
@parent
:: Address
@stop

@section('content')

<h1>Showing {{ $Address->address }}</h1>


@stop
