@extends('DHRCases.master')

@section('title')
@parent
::  DHR Cases
@stop

@section('content')

    
    <h1>Showing {{ $DHRCases->id }}</h1>

	<div class="jumbotron text-left">
		<p>
                    <strong>Household</strong>{{ $DHRCases->household_id }}<br>
                    <strong>Case Number</strong>{{ $DHRCases->caseNumber }}<br>
                    <strong>Status</strong>{{ $DHRCases->status }}<br>
                    <strong>Type</strong>{{ $DHRCases->type }}<br>
                    <strong>Date Open</strong>{{ $DHRCases->opened }}<br>
                    <strong>Date Close</strong>{{ $DHRCases->closed }}<br>


		</p>
	</div>

@stop
