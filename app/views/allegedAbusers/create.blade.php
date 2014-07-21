<!-- app/views/allegedAbusers/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('allegedAbusers') }}">Child entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedAbusers') }}">View All allegedAbusers</a></li>
		<li><a href="{{ URL::to('allegedAbusers/create') }}">Create a allegedAbuser entry</a>
	</ul>
</nav>

<h1>Create a allegedAbuser</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'allegedAbusers')) }}

	<div class="form-group">
		{{ Form::label('person_id', 'Personal info id') }}
		{{ Form::text('person_id', Input::old('person_id'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('known', 'known abuser') }}
		{{ Form::checkbox('known', '1', Input::old('known'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('adult', 'is adult') }}
		{{ Form::checkbox('adult', '1', Input::old('adult'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the allegedAbuser entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>