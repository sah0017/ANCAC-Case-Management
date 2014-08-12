@extends('allegedOffenders.master')

@section('title')
@parent
:: Edit Alleged Offender
@stop

@section('content')

<h1>Edit </h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($allegedOffender, array('route' => array('allegedOffenders.update', $allegedOffender->id), 'method' => 'PUT')) }}

        <div class="form-group">
		{{ Form::label('person_id', 'Person') }}
		{{ Form::select('person_id', Person::all()->lists('name','id'), Input::old('person_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('case_id', 'Case') }}
		{{ Form::select('case_id', TrackedCase::all()->lists('name','id'), Input::old('case_id'), array('class' => 'form-control')) }}
	</div>

         <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>
        <br>

	{{ Form::submit('Edit the Alleged Offender Entry', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop