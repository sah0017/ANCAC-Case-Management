@extends('phones.master')

@section('title')
@parent
:: Phone
@stop

@section('content')

<h1>Showing:</h1>
<h1>Number: {{ $Phones->number }}</h1>
<h1>Type:{{ $Phones->type }}</h1>


@stop