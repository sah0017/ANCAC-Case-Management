<!-- app/views/allegedOffenders/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Alleged Offenders</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('allegedOffenders') }}">Alleged Offender Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedOffenders') }}">View All Alleged Offenders</a></li>
		<li><a href="{{ URL::to('allegedOffenders/create') }}">Create a Alleged Offender Entry</a>
	</ul>
</nav>

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



	{{ Form::submit('Create the Alleged Offender Entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>