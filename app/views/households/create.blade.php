@extends('households.master')

@section('title')
@parent
:: Create Household
@stop

@section('content')

<h1>Create a Household</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'households')) }}

	<div class="form-group">
		{{ Form::label('pets', 'Pets') }}
		{{ Form::text('pets', Input::old('pets'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('medicare', 'Medicare') }}
		{{ Form::checkbox('medicare', '1', Input::old('medicare'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('allKids', 'All Kids') }}
		{{ Form::checkbox('allKids', '1', Input::old('allKids'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('freeOrReducedLunch', 'Free or Reduced Lunch') }}
		{{ Form::checkbox('freeOrReducedLunch', '1', Input::old('freeOrReducedLunch'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('onBase', 'On Base') }}
		{{ Form::checkbox('onBase', '1', Input::old('onBase'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop