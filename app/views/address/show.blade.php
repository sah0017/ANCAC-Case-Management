@extends('address.master')

@section('title')
@parent
:: Address
@stop

@section('content')

<h1>Showing {{ $Address->address }}</h1>
<strong>Line 1: </strong>{{ $Address->line1 }}<br>
<strong>Line 2: </strong>{{ $Address->line2 }}<br>
<strong>City: </strong>{{ $Address->city  }}<br>
<strong>State: </strong>{{ $Address->state }}<br>
<strong>Zip: </strong>{{ $Address->zip }}<br>
<strong>County: </strong>{{ $Address->county_id }}<br>


@stop
