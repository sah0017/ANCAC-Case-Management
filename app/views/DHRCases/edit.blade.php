<html>
<head>
	<title>ANCAC DHR Cases</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('DHRCases') }}">DHRCases</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('DHRCases') }}">View All DHRCases</a></li>
		<li><a href="{{ URL::to('DHRCases/create') }}">Create a DHRCases</a>
	</ul>
</nav>

<h1>Create a DHRCases</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($DHRCases, array('route' => array('DHRCases.update', $DHRCases->id), 'method' => 'PUT')) }}


        <div class="form-group">
		{{ Form::label('household_id', 'Household id') }}
		{{ Form::select('household_id', Household::all()->lists('id','id'),Input::old('household_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('caseNumber', 'Case Number') }}
		{{ Form::select('caseNumber', TrackedCase::all()->lists('id','id'),Input::old('caseNumber'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select Status', '1' => 'Open',
                            '2' => 'Closed'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('opened', 'Case Open Date') }}
		{{ Form::text('opened', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('closed', 'Case closed Date') }}
		{{ Form::text('closed', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the DHRCases!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
