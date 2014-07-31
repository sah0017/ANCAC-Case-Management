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
		{{ Form::label('address1', 'Line 1') }}
		{{ Form::text('address1', Input::old('address1'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('address2', 'Line 2') }}
		{{ Form::text('address2', Input::old('address2'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('zip', 'Zip Code') }}
		{{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'county_id') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>
        

	{{ Form::submit('Create the Address!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>