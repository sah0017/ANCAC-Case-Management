@extends('abuseTypes.master')

@section('title')
@parent
:: Create Abuse Types
@stop

@section('content')

<h1>Create a Abuse Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'abuseTypes')) }}

	<div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the Abuse Type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop