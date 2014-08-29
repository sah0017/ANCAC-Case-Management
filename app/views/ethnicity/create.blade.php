@extends('ethnicity.master')

@section('title')
@parent
:: Create Ethnicity
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Create a Ethnicity</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ethnicity')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('ethnicity', 'Ethnicity') }}
		{{ Form::text('ethnicity', Input::old('ethnicity'), array('class' => 'form-control','autofocus')) }}
	</div>


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop