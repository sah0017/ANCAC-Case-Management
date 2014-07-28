<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('relativeType') }}">Abuse Relative Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('wrokerType') }}">View All Relative Types</a></li>
		<li><a href="{{ URL::to('relativeType/create') }}">Create a Relative Type</a>
	</ul>
</nav>

<h1>Create a Relative Type</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'relativeType')) }}

	<div class="form-group">
		{{ Form::label('type', 'type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the Relative Type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
