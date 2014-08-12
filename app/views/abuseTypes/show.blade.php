@extends('abuseTypes.master')

@section('title')
@parent
:: Abuse Types
@stop

@section('content')

<h1>Showing: {{ $abuseType->type }}</h1>


@stop