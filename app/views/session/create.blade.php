<!-- app/views/session/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('session') }}">session entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('session') }}">View All sessions</a></li>
		<li><a href="{{ URL::to('session/create') }}">Create a session entry</a>
	</ul>
</nav>

<h1>Create a session</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'session')) }}


	<div class="form-group">
		{{ Form::label('serviceType_id', 'serviceType_id') }}
		{{ Form::select('serviceType_id', ServiceType::all()->lists('type','id'), Input::old('serviceType_id'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
		{{ Form::label('dateAndTime', 'dateAndTime') }}
		{{ Form::text('dateAndTime', Input::old('dateAndTime'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('worker_id', 'worker_id') }}
		{{ Form::text('worker_id', Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the session entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>