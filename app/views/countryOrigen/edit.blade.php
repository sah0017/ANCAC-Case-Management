@extends('countryOrigen.master')

@section('title')
@parent
:: Create Country of Origen
@stop

@section('content')

<h1>Edit a Country of Origen</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model($countryOrigen, array('route' => array('countryOrigen.update', $countryOrigen->id), 'method' => 'PUT')) }}

<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop