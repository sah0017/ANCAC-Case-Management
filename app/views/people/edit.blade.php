<!-- app/views/people/edit.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('people') }}">Edit Person Entry</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('people') }}">View All people</a></li>
		<li><a href="{{ URL::to('people/create') }}">Create a Person entry</a>
	</ul>
</nav>

<h1>Edit {{ $person->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($person, array('route' => array('people.update', $person->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('dob', 'Date of birth (m-d-y)') }}
		{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('drugUse', 'History of drug use') }}
		{{ Form::checkbox('drugUse', '1', Input::old('drugUse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('physicalAbuse', 'History of physical abuse') }}
		{{ Form::checkbox('physicalAbuse', '1', Input::old('physicalAbuse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuse', 'History of sexual abuse') }}
		{{ Form::checkbox('sexAbuse', '1', Input::old('sexAbuse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('mentalHealthTreatment', 'Has had mental health treatment') }}
		{{ Form::checkbox('mentalHealthTreatment', '1', Input::old('mentalHealthTreatmet'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('crimeConviction', 'Has been convicted of a crime') }}
		{{ Form::checkbox('cromeConviction', '1', Input::old('crimeConviction'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('employed', 'Is employed') }}
		{{ Form::checkbox('employed', '1', Input::old('employed'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('fullTime', 'Full-time employment') }}
		{{ Form::checkbox('fullTime', '1', Input::old('fullTime'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('activeMilitary', 'Is active military') }}
		{{ Form::checkbox('activeMilitary', '1', Input::old('activeMilitary'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuseSurvivor', 'Is a sexual abuse survivor') }}
		{{ Form::checkbox('sexAbuseSurvivor', '1', Input::old('sexAbuseSurvivor'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', Input::old('language'), array('class' => 'form-control')) }}
	</div>
        
        
        <div class="form-group">
		{{ Form::label('maritalStatus', 'Marital status') }}
		{{ Form::slect('maritalStatus', array(
                            'married' => 'married',
                            'single' => 'Single',
                            'divorced' => 'Divorced'),
                            Input::old('maritalStatus'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('address_id', 'address_id') }}
		{{ Form::text('address_id', Input::old('address_id'), array('class' => 'form-control')) }}
	</div
        
        <div class="form-group">
		{{ Form::label('household_id', 'household_id') }}
		{{ Form::text('household_id', Input::old('household_id'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('ethnicity_id', 'ethnicity_id') }}
		{{ Form::text('ethnicity_id', Input::old('ethnicity_id'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the person entry', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>