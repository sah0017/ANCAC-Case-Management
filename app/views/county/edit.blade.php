@extends('county.master')

@section('title')
@parent
:: Edit County
@stop

@section('content')

<h1>Edit {{ $county->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($county, array('route' => array('county.update', $county->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop