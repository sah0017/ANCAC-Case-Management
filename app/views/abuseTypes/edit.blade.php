@extends('abuseTypes.master')

@section('title')
@parent
:: Edit Abuse Type
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $abuseType->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($abuseType, array('route' => array('abuseTypes.update', $abuseType->id), 'method' => 'PUT')) }}

	<div id="pad" class="form-inline" class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Save!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop