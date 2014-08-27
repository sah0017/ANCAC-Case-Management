@extends('relatives.master')

@section('title')
@parent
:: Relative
@stop

@section('content')

    <h1>Showing {{ $relative->name }}</h1><a class="btn btn-small btn-info" href="{{$_SERVER['REQUEST_URI']}}/edit">Edit</a> 
    <a class="btn btn-small btn-success" href="../..">Back to Dashboard</a>

	<div class="jumbotron text-left">
		<h2>{{ $relative->name }}</h2>
		<p>
                        <strong>Name:</strong>{{$relative->personalInfo->name}}  <br>
                        <strong>Name associated with Relative:</strong> {{ $relative->alias }}<br>
                        <strong>Type of Relation:</strong>{{$relative->relationType->type}}<br>
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
                        <strong>Is He/She an Alleged Offender:</strong> 
                        @if ($relative->allegedOffender)
                        Yes
                        @else
                        No
                        @endif
                        

		</p>
	</div>

@stop