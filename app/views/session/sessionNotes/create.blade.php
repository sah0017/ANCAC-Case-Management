@extends('sessionNotes.master')

@section('title')
@parent
:: Create Session Notes
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Create Session Notes</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'sessionNotes')) }}
<div class="form-inline">
	<div id="pad" >
		{{ Form::label('note', 'Note') }}
                <br>
		{{ Form::textarea('note', Input::old('note'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('worker_id', 'Worker') }}
		{{ Form::select('worker_id', RelationType::all()->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('session_id', 'Session') }}
		{{ Form::select('session_id', RelationType::all()->lists('id','id'), Input::old('session_id'), array('class' => 'form-control')) }}
	</div>
</div>
	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop