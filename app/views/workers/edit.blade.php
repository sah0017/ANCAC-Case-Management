<!-- app/views/workers/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('workers') }}">workers</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('workers') }}">View All workers for the Case</a></li>
		<li><a href="{{ URL::to('workers/create') }}">Edit a worker entry</a>
	</ul>
</nav>
    
    <h1>Edit {{ $relative->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::model($worker, array('route' => array('worker.update', $worker->id), 'method' => 'PUT')) }}


	<div class="form-group">
		{{ Form::label('name', 'Name of the worker') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('workerType_id', 'workerType_id') }}
		{{ Form::select('workerType_id', WorkerType::all()->lists('type','id'), Input::old('workerType_id'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the relatives entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>