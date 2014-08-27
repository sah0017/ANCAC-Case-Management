@extends('countryOrigen.master')

@section('title')
@parent
:: Create Country of Origen
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Create a Country of Origen</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'countryOrigen')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop