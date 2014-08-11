@extends('session.master')

@section('title')
@parent
:: Session
@stop

@section('content')

<h1>Showing {{ $session->personalInfo->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $session->name }}</h2>
		<p>
			<strong>Service Type:</strong> {{ $session->personalInfo->serviceType_id }}<br>
                        <strong>Date:</strong> {{ $session->personalInfo->date }}<br>
                        <strong>Time Start:</strong> {{ $session->personalInfo->timeStart }}<br>
                        <strong>Time End:</strong> {{ $session->personalInfo->timeEnd }}<br>
                        <strong>Status:</strong> {{ $session->personalInfo->status }}<br>
			<strong>MDT Worker:</strong> {{ $session->parentalInfo->Worker_id }}<br>
                        <strong>Discussed Abuse:</strong> {{ $session->personalInfo->discussedAbuse }}<br>
                        
		</p>
	</div>

</div>
</body>
</html>