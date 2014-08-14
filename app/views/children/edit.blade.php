@extends('children.master')

@section('title')
@parent
:: Edit Children
@stop

@section('content')

<h1>Edit {{ $child->personalInfo->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($child, array('route' => array('children.update', $child->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('first', 'First Name') }}
		{{ Form::text('first', $child->personalInfo->first, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('middle', 'Middle Name') }}
		{{ Form::text('middle', $child->personalInfo->middle, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('last', 'Last Name') }}
		{{ Form::text('last', $child->personalInfo->last, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('age', 'Age') }}
		{{ Form::text('age', $child->personalInfo->age, array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('dob', 'Date of Birth (YYYY-MM-DD)') }}
		{{ Form::text('dob',$child->personalInfo->dob, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('parentalHistory', 'Parental History') }}
		{{ Form::text('parentalHistory', Input::old('parentalHistory'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('parentStatus', 'Parent Status') }}
		{{ Form::text('parentStatus', Input::old('parentStatus'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('medicalCompleted', 'Is Medical Completed') }}
		{{ Form::checkbox('medicalCompleted', '1', Input::old('medicalCompleted'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('medicalLocation', 'Medical Location') }}
		{{ Form::text('medicalLocation', Input::old('medicalLocation'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('schoolGrade', 'school Grade') }}
		{{ Form::text('schoolGrade', Input::old('schoolGrade'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('school', 'School') }}
		{{ Form::text('school', Input::old('school'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('specialNeeds', 'Special Needs') }}
		{{ Form::text('specialNeeds', Input::old('specialNeeds'), array('class' => 'form-control')) }}
	</div>


        <div class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', Input::old('language'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('originCountry', 'Origin Country') }}
		{{ Form::text('originCountry', Input::old('originCountry'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            
		{{ Form::label('phone', 'Home Phone ') }}
		{{ Form::text('phone', $child->personalInfo->address->phone, array('class' => 'form-control')) }}

	</div>

        <div class="form-group">
		{{ Form::label('address1', 'Address Line 1') }}
		{{ Form::text('address1', $child->personalInfo->address->line1, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('address2', 'Address Line 2') }}
		{{ Form::text('address2', $child->personalInfo->address->line2, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', $child->personalInfo->address->city, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', $child->personalInfo->address->state, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('zip', 'Zip Code') }}
		{{ Form::text('zip', $child->personalInfo->address->zip, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('ethnicity_id', 'Ethnicity') }}
		{{ Form::select('ethnicity_id', Ethnicity::all()->lists('ethnicity','id'), Input::old('ethnicity_id'), array('class' => 'form-control')) }}
	</div>
        <br>

	{{ Form::submit('Edit the Child Entry', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop