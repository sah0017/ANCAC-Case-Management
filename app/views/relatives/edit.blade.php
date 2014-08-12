@extends('relatives.master')

@section('title')
@parent
:: Relative
@stop

@section('content')
    
<h1>Edit {{ $relative->personalInfo->name }}'s relation to {{ $relative->child->personalInfo->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}



{{ Form::model($relative, array('route' => array('relatives.update', $relative->id), 'method' => 'PUT')) }}


         <div class="form-group">
		{{ Form::label('relationType_id', 'Relation Type') }}
		{{ Form::select('relationType_id', RelationType::all()->lists('type','id'), Input::old('relationType_id'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('custodian', 'Is He/She the Custodion of the Child') }}
		{{ Form::checkbox('custodian','1', Input::old('custodian'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sameHouse', 'Do they belong to the same house?') }}
		{{ Form::checkbox('sameHouse', '1', Input::old('sameHouse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('alias', 'Name of the person.') }}
		{{ Form::text('alias', Input::old('alias'), array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Create the relatives entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop
