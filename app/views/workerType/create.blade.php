<html>
<head>
	<title>ANCAC Worker Type</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('workerType') }}">Abuse Worker Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('workerType') }}">View All Worker Types</a></li>
		<li><a href="{{ URL::to('workerType/create') }}">Create a Worker Type</a>
	</ul>
</nav>

<h1>Create a Worker Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'workerType')) }}

	<div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the worker type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
