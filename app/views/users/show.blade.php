@extends('users.master')

@section('title')
@parent
:: {{ $user->id }} Info
@stop

@section('content')

<h1>Showing {{ $user->id }}</h1>

	<div class="jumbotron text-left">
		<p>
			<strong>Full Name:</strong> {{ $user->fullname }}<br>
                        <strong>Email:</strong> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
                        <strong>Access:</strong> 
                            @if ($user->level == 1)
                                View Only
                            @elseif ($user->level == 2)
                                Normal
                            @elseif ($user->level == 3)
                                Admin
                            @endif
                        <br>
                        <strong>Center:</strong> {{ $user->center->CenterName }}<br>
			

		</p>
	</div>

@stop