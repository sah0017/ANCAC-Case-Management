@extends('allegedOffenders.master')

@section('title')
@parent
:: Alleged Offender
@stop

@section('content')

<h1>Showing {{ $allegedOffender->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $allegedOffender->name }}</h2>
		<p>
			<strong>Person:</strong> {{ $allegedOffender->person_id }}<br>
                        <strong>Case:</strong> {{ $allegedOffender->case_id }}<br>
                        <strong>County:</strong> {{ $allegedOffender->county_id }}<br>

		</p>
	</div>

@stop