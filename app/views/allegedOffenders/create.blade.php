@extends('allegedOffenders.master')

@section('title')
@parent
:: Create Alleged Offender
@stop

@section('content')

<h1>Create a Alleged Offender</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'allegedOffenders')) }}

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



	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop