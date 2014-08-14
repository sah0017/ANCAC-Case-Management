@extends('people.master')

@section('title')
@parent
:: Edit Person
@stop

@section('content')

<h1>Edit {{ $person->name }}</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script> 
    $(function() {
    $( "#dob" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
  
  </script>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($person, array('route' => array('people.update', $person->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('first', 'First Name') }}
		{{ Form::text('first', Input::old('first'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('middle', 'Middle Name') }}
		{{ Form::text('middle', Input::old('middle'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('last', 'Last Name') }}
		{{ Form::text('last', Input::old('last'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('age', 'Age') }}
		{{ Form::text('age', Input::old('age'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
            
		{{ Form::label('dob', 'Date of Birth ') }}
		{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control')) }}

	</div>

        <div class="form-group">
            
		{{ Form::label('phone', 'Home Phone ') }}
		{{ Form::text('phone', $person->address->phone, array('class' => 'form-control')) }}

	</div>

        <div class="form-group">
            
		{{ Form::label('cellPhone', 'Cell Phone ') }}
		{{ Form::text('cellPhone', $person->phone->where('type','cell'), array('class' => 'form-control')) }}

	</div>

        <div class="form-group">
            
		{{ Form::label('workPhone', 'Work Phone ') }}
		{{ Form::text('workPhone', $person->phone->where('type','work'), array('class' => 'form-control')) }}

	</div>

	<div class="form-group">
		{{ Form::label('drugUse', 'History of Drug Use') }}
		{{ Form::checkbox('drugUse', '1', Input::old('drugUse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('physicalAbuse', 'History of Physical Abuse') }}
		{{ Form::checkbox('physicalAbuse', '1', Input::old('physicalAbuse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuse', 'History of Sexual Abuse') }}
		{{ Form::checkbox('sexAbuse', '1', Input::old('sexAbuse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('mentalHealthTreatment', 'Has had Mental Health Treatment') }}
		{{ Form::checkbox('mentalHealthTreatment', '1', Input::old('mentalHealthTreatmet'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('crimeConviction', 'Has been Convicted of a Crime') }}
		{{ Form::checkbox('crimeConviction', '1', Input::old('crimeConviction'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('employed', 'Is Employed') }}
		{{ Form::checkbox('employed', '1', Input::old('employed'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('fullTime', 'Full-time Employment') }}
		{{ Form::checkbox('fullTime', '1', Input::old('fullTime'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('activeMilitary', 'Is Active Military') }}
		{{ Form::checkbox('activeMilitary', '1', Input::old('activeMilitary'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuseSurvivor', 'Is a Sexual Abuse Survivor') }}
		{{ Form::checkbox('sexAbuseSurvivor', '1', Input::old('sexAbuseSurvivor'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('specialNeeds', 'Has Special Needs') }}
		{{ Form::text('specialNeeds', Input::old('specialNeeds'), array('class' => 'form-control')) }}
	</div>

        
        <div class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', Input::old('language'), array('class' => 'form-control')) }}
	</div>
        
        
        <div class="form-group">
		{{ Form::label('maritalStatus', 'Marital Status') }}
		{{ Form::select('maritalStatus', array(
                            'married' => 'married',
                            'single' => 'Single',
                            'divorced' => 'Divorced'),
                            Input::old('maritalStatus'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('originCountry', 'Origin Country') }}
		{{ Form::text('originCountry', Input::old('originCountry'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
		{{ Form::label('ethnicity_id', 'Ethnicity') }}
		{{ Form::select('ethnicity_id', Ethnicity::all()->lists('ethnicity','id'), Input::old('ethnicity_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('address1', 'Address Line 1') }}
		{{ Form::text('address1', $person->address->line1, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('address2', 'Address Line 2') }}
		{{ Form::text('address2', $person->address->line2, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', $person->address->city, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', $person->address->state, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('zip', 'Zip Code') }}
		{{ Form::text('zip', $person->address->zip, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the person entry', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop