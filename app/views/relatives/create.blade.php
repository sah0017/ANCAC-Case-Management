<!-- app/views/relatives/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Relatives</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('relatives') }}">Relations</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('relatives') }}">View All Relations</a></li>
		<li><a href="{{ URL::to('relatives/create') }}">Create a Relation Entry</a>
	</ul>
</nav>

<h1>Create a Relation</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'relatives')) }}

	<div class="form-group">
		{{ Form::label('abusedChild_id', 'Abused Child') }}
		{{ Form::select('abusedChild_id', AbusedChild::all()->lasts('name','id'),Input::old('abusedChild_id'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('person_id', 'Person') }}
		{{ Form::select('person_id', Person::all()->lists('name','id'), Input::old('person_id'), array('class' => 'form-control')) }}
	</div>

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

</div>
</body>
</html>

