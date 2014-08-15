@extends('sessionNotes.master')

@section('title')
@parent
:: Edit Session Notes
@stop

@section('content')

<h1>Edit {{ $rsessionNotes->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($sessionNotes, array('route' => array('sessionNotes.update', $sessionNotes->id), 'method' => 'PUT')) }}

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


	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop