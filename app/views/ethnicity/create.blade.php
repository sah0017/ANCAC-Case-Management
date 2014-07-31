<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('ethnicity') }}">Ethnicity</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('ethnicity') }}">View All Ethnicity</a></li>
		<li><a href="{{ URL::to('ethnicity/create') }}">Create a Ethnicity</a>
	</ul>
</nav>

<h1>Create a Ethnicity</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'ethnicity')) }}

	<div class="form-group">
		{{ Form::label('ethnicity', 'ethnicity') }}
		{{ Form::text('ethnicity', Input::old('ethnicity'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the Worker Type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
