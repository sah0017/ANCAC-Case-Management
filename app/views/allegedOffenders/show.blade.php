<!-- app/views/allegedOffenders/show.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('allegedOffenders') }}">AllegedOffender Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedOffenders') }}">View All allegedOffenders</a></li>
		<li><a href="{{ URL::to('allegedOffenders/create') }}">Create a allegedOffender entry</a>
	</ul>
</nav>

<h1>Showing {{ $allegedOffender->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $allegedOffender->name }}</h2>
		<p>
			<strong>person_id:</strong> {{ $allegedOffender->person_id }}<br>
                        <strong>case_id:</strong> {{ $allegedOffender->case_id }}<br>
                        <strong>county_id:</strong> {{ $allegedOffender->county_id }}<br>

		</p>
	</div>

</div>
</body>
</html>