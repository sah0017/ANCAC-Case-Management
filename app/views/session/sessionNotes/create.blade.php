@extends('sessionNotes.master')

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
		{{ Form::text('note', Input::old('note'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('worker_id', 'Worker') }}
		{{ Form::select('worker_id', RelationType::all()->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('session_id', 'Session') }}
		{{ Form::select('session_id', RelationType::all()->lists('id','id'), Input::old('session_id'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the session notes!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop