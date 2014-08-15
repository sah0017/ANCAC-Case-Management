@extends('school.master')

@section('title')
@parent
:: Create School
@stop

@section('content')
<h1>Edit {{ $school->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($school, array('route' => array('school.update', $school->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Edit the School!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop