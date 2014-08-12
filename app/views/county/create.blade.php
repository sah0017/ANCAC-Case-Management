@extends('county.master')

@section('title')
@parent
:: Create County
@stop

@section('content')

<h1>Create a County</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'county')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the County!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop