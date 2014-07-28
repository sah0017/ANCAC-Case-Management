<!-- app/views/relatives/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('relatives') }}">relations</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('relatives') }}">View All relations</a></li>
		<li><a href="{{ URL::to('relatives/create') }}">Create a relation entry</a>
	</ul>
</nav>

<h1>Create a relation</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'relatives')) }}

	<div class="form-group">
		{{ Form::label('abusedChild_id', 'Child related id') }}
		{{ Form::text('abusedChild_id', Input::old('abusedChild_id'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('person_id', 'person id') }}
		{{ Form::text('person_id', Input::old('person_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('type', 'Type of Relationship') }}
		{{ Form::select('type', array('0' => 'Select type of Relationship', '1' => 'Mother',
                            '2' => 'Father', '3' => 'Brother', '4' => 'Sister', '5' => 'Uncle', '6' => 'Aunt','7' => 'Grand Mother',
                            '8' => 'Grand Father','9' => 'Other'), 
                    Input::old('type'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('custodian', 'Is He/She the custodion of the Child') }}
		{{ Form::checkbox('custodian','1', Input::old('custodian'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sameHouse', 'Do they belong to the same house') }}
		{{ Form::checkbox('sameHouse', '1', Input::old('sameHouse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('alias', 'Name of the person') }}
		{{ Form::text('alias', Input::old('alias'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('allegedOffender', 'Is he/she and alleged Offender') }}
		{{ Form::checkbox('allegedOffender', '1', Input::old('allegedOffender'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the relatives entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

