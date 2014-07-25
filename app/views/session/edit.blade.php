<!-- app/views/session/edit.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('session') }}">Child Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('session') }}">View All session</a></li>
		<li><a href="{{ URL::to('session/create') }}">Create a Child entry</a>
	</ul>
</nav>

<h1>Edit {{ $session->personalInfo->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($session, array('route' => array('session.update', $session->id), 'method' => 'PUT')) }}

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


        <br>

	{{ Form::submit('Edit the session entry', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>