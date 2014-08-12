@extends('workerType.master')

@section('title')
@parent
:: Create Worker Type
@stop

@section('content')

<h1>Create a Worker Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'workerType')) }}

	<div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the worker type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop