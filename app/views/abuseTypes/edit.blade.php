<html>
<head>
	<title>ANCAC Abuse Types</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('abuseTypes') }}">Abuse Type Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('abuseTypes') }}">View All Abuse Types</a></li>
		<li><a href="{{ URL::to('abuseTypes/create') }}">Create a Abuse Type</a>
	</ul>
</nav>

<h1>Edit {{ $abuseType->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($abuseType, array('route' => array('abuseTypes.update', $abuseType->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Edit the Abuse Type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>