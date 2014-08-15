@extends('school.master')

@section('title')
@parent
:: Create School
@stop

@section('content')

<h1>Create a School</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'school')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the School!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

