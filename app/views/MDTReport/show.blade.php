@extends('MDTReport.master')

@section('title')
@parent
:: Create MDTReport
@stop

@section('content')

    <h1>Showing MDTReport</h1>

	<div class="jumbotron text-left">
		<p>
                        <strong>Date:</strong>{{$MDTReport->date}}  <br>
                        <strong>Location:</strong> {{ $MDTReport->location }}<br>
                        @foreach($MDTReport->cases as $case)
                        <strong>Case Number:</strong>{{$case->case_id}}<br>
                        <strong>Recommendation:</strong>{{$case->recommendation}}<br>
                        @endforeach

		</p>
	</div>

@stop
