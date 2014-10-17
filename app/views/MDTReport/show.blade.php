@extends('MDTReport.master')

@section('title')
@parent
:: Create MDTReport
@stop

@section('content')

    <h1>Showing MDTReport</h1>

	<div class="jumbotron text-left">
		<p>
                        <strong>Date: </strong>{{$MDTReport->date}}  <br>
                        <strong>Location: </strong> {{ $MDTReport->location }}<br>
                        @foreach($MDTReport->cases as $case)
                        <strong>Case Number: </strong>{{$case->info->caseNumber}}<br>
                        <strong>Recommendation: </strong>{{$case->recommendation}}<br>
                        @endforeach
                        
		</p>
                <a class="btn btn-small btn-success" href="{{ URL::to('MDTReport/' . $MDTReport->id . '/summary') }}">Summary Report</a>
                <a class="btn btn-small btn-success" href="{{ URL::to('MDTReport/' . $MDTReport->id . '/caseNotes') }}">Case Notes Report</a>
	</div>

@stop
