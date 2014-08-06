<!-- app/views/session/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Session</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('session') }}">Session Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('session') }}">View All Session</a></li>
		<li><a href="{{ URL::to('session/create') }}">Create a Session Entry</a>
	</ul>
</nav>

<h1>Edit {{ $session->personalInfo->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($session, array('route' => array('session.update', $session->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('serviceType_id', 'Service Type') }}
		{{ Form::select('serviceType_id', ServiceType::all()->lists('type','id'), Input::old('serviceType_id'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
		{{ Form::label('date', 'Date') }}
		{{ Form::text('date', Input::old('date'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('timeStart', 'Time Start') }}
		{{ Form::text('timeStart', Input::old('timeStart'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('timeEnd', 'Time End') }}
		{{ Form::text('timeEnd', Input::old('timeEnd'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select a Status', '1' => 'scheduled',
                            '2' => 'no-show', '3' => 'cancled', '4' => 'attended', '5' => 'rescheduled'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('worker_id', 'MDT Workers') }}
		{{ Form::select('worker_id', Worker::all()->lists('type','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('discussedAbuse', 'Discussed Abuse') }}
		{{ Form::select('discussedAbuse', array('0' => 'Select the one that aplies', '1' => 'yes',
                            '2' => 'no', '3' => 'partial'), 
                    Input::old('discussedAbuse'), array('class' => 'form-control')) }}
	</div>

        <br>

	{{ Form::submit('Edit the session entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>