@extends('ethnicity.master')

@section('title')
@parent
:: Create Ethnicity
@stop

@section('content')

<h1>Create a Ethnicity</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ethnicity')) }}

	<div class="form-group">
		{{ Form::label('ethnicity', 'Ethnicity') }}
		{{ Form::text('ethnicity', Input::old('ethnicity'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop