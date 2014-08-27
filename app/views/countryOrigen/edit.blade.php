@extends('countryOrigen.master')

@section('title')
@parent
:: Create Country of Origen
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit a Country of Origen</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model($countryOrigen, array('route' => array('countryOrigen.update', $countryOrigen->id), 'method' => 'PUT')) }}

        <div id="pad" class="form-inline" class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop