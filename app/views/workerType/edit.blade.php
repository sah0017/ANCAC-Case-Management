<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('workerType') }}">Worker Type Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('workerType') }}">View All Worker Types</a></li>
		<li><a href="{{ URL::to('workerType/create') }}">Create a Worker Type</a>
	</ul>
</nav>

<h1>Edit {{ $workerType->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($workerType, array('route' => array('workerType.update', $workerType->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('type', 'type') }}
		{{ Form::text('type', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Edit the Worker Type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

