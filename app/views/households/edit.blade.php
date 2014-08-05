<html>
<head>
	<title>ANCAC Households</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('households') }}">Household</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('households') }}">View All Households</a></li>
		<li><a href="{{ URL::to('households/create') }}">Create a Household</a>
	</ul>
</nav>

<h1>Edit {{ $household->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($household, array('route' => array('households.update', $household->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('pets', 'Pets') }}
		{{ Form::text('pets', Input::old('pets'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('medicare', 'Medicare') }}
		{{ Form::checkbox('medicare', '1', Input::old('medicare'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('allKids', 'All Kids') }}
		{{ Form::checkbox('allKids', '1', Input::old('allKids'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('freeOrReducedLunch', 'Free or Reduced Lunch') }}
		{{ Form::checkbox('freeOrReducedLunch', '1', Input::old('freeOrReducedLunch'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('onBase', 'On Base') }}
		{{ Form::checkbox('onBase', '1', Input::old('onBase'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Household!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>