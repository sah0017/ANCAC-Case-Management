<!-- app/views/allegedOffenders/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('allegedOffenders') }}">allegedOffender entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedOffenders') }}">View All allegedOffenders</a></li>
		<li><a href="{{ URL::to('allegedOffenders/create') }}">Create a allegedOffender entry</a>
	</ul>
</nav>

<h1>Create a allegedOffender</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'allegedOffenders')) }}

        <div class="form-group">
		{{ Form::label('person_id', 'person_id') }}
		{{ Form::text('person_id', Input::old('person_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('case_id', 'case_id') }}
		{{ Form::text('case_id', Input::old('case_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'county_id') }}
		{{ Form::text('county_id', Input::old('county_id'), array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Create the allegedOffender entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>