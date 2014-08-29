@extends('relativeType.master')

@section('title')
@parent
:: Edit Relative Type
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $relativeType->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($relativeType, array('route' => array('relativeType.update', $relativeType->id), 'method' => 'PUT')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', null, array('class' => 'form-control','autofocus')) }}
	</div>



	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop