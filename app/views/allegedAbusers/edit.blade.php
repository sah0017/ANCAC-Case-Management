<!-- app/views/allegedAbusers/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('allegedAbusers') }}">Child Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedAbusers') }}">View All allegedAbusers</a></li>
		<li><a href="{{ URL::to('allegedAbusers/create') }}">Create a Child entry</a>
	</ul>
</nav>

<h1>Edit </h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($allegedAbuser, array('route' => array('allegedAbusers.update', $allegedAbuser->id), 'method' => 'PUT')) }}

        <div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', $allegedAbuser->personalInfo->name, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('known', 'known abuser') }}
		{{ Form::checkbox('known', '1', Input::old('known'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('adult', 'is adult') }}
		{{ Form::checkbox('adult', '1', Input::old('adult'), array('class' => 'form-control')) }}
	</div>

        
        
        <div class="form-group">
		{{ Form::label('dob', 'Date of birth (YYYY-MM-DD)') }}
		{{ Form::text('dob', $allegedAbuser->personalInfo->dob, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('drugUse', 'History of drug use') }}
		{{ Form::checkbox('drugUse', '1', $allegedAbuser->personalInfo->drugUse, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('physicalAbuse', 'History of physical abuse') }}
		{{ Form::checkbox('physicalAbuse', '1', $allegedAbuser->personalInfo->physicalAbuse, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuse', 'History of sexual abuse') }}
		{{ Form::checkbox('sexAbuse', '1', $allegedAbuser->personalInfo->sexAbuse, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('mentalHealthTreatment', 'Has had mental health treatment') }}
		{{ Form::checkbox('mentalHealthTreatment', '1', $allegedAbuser->personalInfo->mentalHealthTreatmet, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('crimeConviction', 'Has been convicted of a crime') }}
		{{ Form::checkbox('cromeConviction', '1', $allegedAbuser->personalInfo->crimeConviction, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('employed', 'Is employed') }}
		{{ Form::checkbox('employed', '1', $allegedAbuser->personalInfo->employed, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('fullTime', 'Full-time employment') }}
		{{ Form::checkbox('fullTime', '1', $allegedAbuser->personalInfo->fullTime, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('activeMilitary', 'Is active military') }}
		{{ Form::checkbox('activeMilitary', '1', $allegedAbuser->personalInfo->activeMilitary, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuseSurvivor', 'Is a sexual abuse survivor') }}
		{{ Form::checkbox('sexAbuseSurvivor', '1', $allegedAbuser->personalInfo->sexAbuseSurvivor, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('specialNeeds', 'has special needs') }}
		{{ Form::checkbox('specialNeeds', '1', $allegedAbuser->personalInfo->specialNeeds, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('disability', 'is disabled') }}
		{{ Form::checkbox('disability', '1', $allegedAbuser->personalInfo->disability, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', $allegedAbuser->personalInfo->language, array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('originCountry', 'originCountry') }}
		{{ Form::text('originCountry', $allegedAbuser->personalInfo->originCountry, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
		{{ Form::label('address_id', 'address_id') }}
		{{ Form::text('address_id', $allegedAbuser->personalInfo->address_id, array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
		{{ Form::label('household_id', 'household_id') }}
		{{ Form::text('household_id', $allegedAbuser->personalInfo->household_id, array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('ethnicity_id', 'ethnicity_id') }}
		{{ Form::text('ethnicity_id', $allegedAbuser->personalInfo->ethnicity_id, array('class' => 'form-control')) }}
	</div>
        <br>

	{{ Form::submit('Edit the allegedAbuser entry', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>