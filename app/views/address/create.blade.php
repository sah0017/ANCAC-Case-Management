<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('address') }}">Address</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('address') }}">View All Address</a></li>
		<li><a href="{{ URL::to('address/create') }}">Create a Address</a>
	</ul>
</nav>

<h1>Create a Address</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'address')) }}

	<div class="form-group">
		{{ Form::label('line1', 'Line 1') }}
		{{ Form::text('lin1', Input::old('line1'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('line2', 'Line 2') }}
		{{ Form::text('lin2', Input::old('line2'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Address!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>