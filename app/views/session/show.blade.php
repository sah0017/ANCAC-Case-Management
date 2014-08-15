@extends('session.master')

@section('title')
@parent
:: Session
@stop

@section('content')

<h1>Showing {{ $session->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $session->name }}</h2>
		<p>
			<strong>Service Type:</strong> {{ $session->type->type }}<br>
                        <strong>Date:</strong> {{ $session->date }}<br>
                        <strong>Time Start:</strong> {{ $session->timeStart }}<br>
                        <strong>Time End:</strong> {{ $session->timeEnd }}<br>
                        <strong>Status:</strong> {{ $session->status }}<br>
			<strong>MDT Worker:</strong> {{ $session->Worker_id }}<br>
                        <strong>Discussed Abuse:</strong> {{ $session->discussedAbuse }}<br>
                        
		</p>
	</div>

@stop