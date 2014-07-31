<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('phones') }}">Phones</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('phones') }}">View All Phones</a></li>
		<li><a href="{{ URL::to('phones/create') }}">Create a Phone</a>
	</ul>
</nav>

<h1>Create a Phones</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'phones')) }}

	<div class="form-group">
		{{ Form::label('number', 'number') }}
		{{ Form::text('number', Input::old('number'), array('class' => 'form-control')) }}
	</div>
        <div class="form-group">
		{{ Form::label('type', 'type') }}
		{{ Form::select('type', array('0' => 'Select a Phones', '1' => 'Home',
                            '2' => 'Work', '3' => 'Cell'), 
                    Input::old('type'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Phones!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
