@extends('relativeType.master')

@section('title')
@parent
:: Create Relative Type
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Create a Relative Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'relativeType')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control','autofocus')) }}
	</div>


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop