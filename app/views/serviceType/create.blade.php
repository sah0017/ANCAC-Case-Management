@extends('serviceType.master')

@section('title')
@parent
:: Create Service Type
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Create a Service Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'serviceType')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop