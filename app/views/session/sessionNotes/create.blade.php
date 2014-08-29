@extends('session.sessionNotes.master')

@section('title')
@parent
:: Create Session Notes
@stop

@section('content')

<h1>Create Session Notes</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'sessionNotes')) }}

	<div class="form-group">
		{{ Form::label('note', 'Note') }}
		{{ Form::textarea('note', Input::old('note'), array('class' => 'form-control','autofocus')) }}
	</div>

        <div class="form-group">
		{{ Form::label('worker_id', 'Worker') }}
		{{ Form::select('worker_id', Worker::Where('center_id',Auth::User()->center_id)->lists('name','id'), Auth::User()->worker_id, array('class' => 'form-control')) }}
	</div>

                {{ Form::hidden('session_id', $session) }}

	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop