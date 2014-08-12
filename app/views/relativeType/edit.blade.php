@extends('relativeType.master')

@section('title')
@parent
:: Edit Relative Type
@stop

@section('content')

<h1>Edit {{ $relativeType->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($relativeType, array('route' => array('relativeType.update', $relativeType->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Edit the Relative Type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop