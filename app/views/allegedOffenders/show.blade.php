<!-- app/views/allegedOffenders/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Alleged Offenders</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('allegedOffenders') }}">Alleged Offender Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedOffenders') }}">View All Alleged Offenders</a></li>
		<li><a href="{{ URL::to('allegedOffenders/create') }}">Create a Alleged Offender Entry</a>
	</ul>
</nav>

<h1>Showing {{ $allegedOffender->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $allegedOffender->name }}</h2>
		<p>
			<strong>Person:</strong> {{ $allegedOffender->person_id }}<br>
                        <strong>Case:</strong> {{ $allegedOffender->case_id }}<br>
                        <strong>County:</strong> {{ $allegedOffender->county_id }}<br>

		</p>
	</div>

</div>
</body>
</html>