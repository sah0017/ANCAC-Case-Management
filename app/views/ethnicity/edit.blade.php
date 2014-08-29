@extends('ethnicity.master')

@section('title')
@parent
:: Edit Ethnicity
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $ethnicity->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($ethnicity, array('route' => array('ethnicity.update', $ethnicity->id), 'method' => 'PUT')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('ethnicity', 'Ethnicity') }}
		{{ Form::text('ethnicity', null, array('class' => 'form-control','autofocus')) }}
	</div>



	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop