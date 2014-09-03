@extends('people.master')

@section('title')
@parent
:: Person
@stop

@section('content')

<h1>Showing: {{ $person->name }}</h1><a class="btn btn-small btn-info" href="{{$_SERVER['REQUEST_URI']}}/edit">Edit</a> 

	<div class="jumbotron text-left">
		<p>
			
                        <strong>DOB:</strong> {{ $person->dob }}<br>
                        <strong>Drug Use:</strong>
                        @if ($person->drugUse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Physical Abuse:</strong>
                        @if ($person->physicalAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Sex Abuse:</strong>
                        @if ($person->sexAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Mental Health Treatment:</strong>
                        @if ($person->mentalHealthTreatment)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Crime Conviction:</strong>
                        @if ($person->crimeConviction)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Employed:</strong>
                        @if ($person->employed)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Full Time:</strong>
                        @if ($person->fullTime)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Active Military:</strong>
                        @if ($person->activeMilitary)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Sex Abuse Survivor:</strong>
                        @if ($person->sexAbuseSurvivor)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Origin Country</strong> {{ $person->originCountry }}<br>
                        <strong>specialNeeds:</strong>
                        @if ($person->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Disability:</strong>
                        @if ($person->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>Language:</strong> {{ $person->language }}<br>
                        <strong>Marital Status:</strong> {{ $person->maritalStatus }}<br>
                        <strong>Household</strong> {{ $person->household_id }}<br>
                        <strong>Ethnicity</strong> {{ $person->ethnicity_id }}<br>
                        <strong>Address:</strong> {{ $person->address->line1 }}<br>
                        {{$person->address->line2 }}<br>
                        {{$person->address->city }}<br>
                        {{$person->address->state }}<br>
                        {{$person->address->zip }}<br>

		</p>
	</div>

@stop