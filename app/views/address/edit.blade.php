@extends('address.master')

@section('title')
@parent
:: Edit Address
@stop

@section('content')

<h1>Edit {{ $address->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($address, array('route' => array('address.update', $address->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('line1', 'Line 1') }}
		{{ Form::text('line1', Input::old('line1'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('line2', 'Line 2') }}
		{{ Form::text('line2', Input::old('line2'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('zip', 'Zip Code') }}
		{{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('phone', 'Phone') }}
		{{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Address!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop