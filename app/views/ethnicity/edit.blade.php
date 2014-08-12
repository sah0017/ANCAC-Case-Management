@extends('ethnicity.master')

@section('title')
@parent
:: Edit Ethnicity
@stop

@section('content')

<h1>Edit {{ $ethnicity->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($ethnicity, array('route' => array('ethnicity.update', $ethnicity->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('ethnicity', 'Ethnicity') }}
		{{ Form::text('ethnicity', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Edit the Ethnicity!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop