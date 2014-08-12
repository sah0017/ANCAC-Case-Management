@extends('relatives.master')

@section('title')
@parent
:: Relative
@stop

@section('content')

    <h1>Showing {{ $relative->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $relative->name }}</h2>
		<p>
			<strong>Type of Relation:</strong>
                        <strong>Custodian:</strong>
                        @if ($relative->custodian)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Part of Same House:</strong>
                        @if ($relative->sameHouse)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>Name of the Relative:</strong> {{ $relative->alias }}<br>
                        <strong>Is He/She an Alleged Offender</strong>
                        

		</p>
	</div>

@stop