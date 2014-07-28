<!-- app/views/relatives/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('relatives') }}">relations</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('relatives') }}">View All relations</a></li>
		<li><a href="{{ URL::to('relatives/create') }}">Create a relation entry</a>
	</ul>
</nav>

    <h1>Showing {{ $relative->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $relatives->name }}</h2>
		<p>
			<strong>Type of relation:</strong>
                        <strong>Custodian:</strong>
                        @if ($relative->custodian)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Part of same House:</strong>
                        @if ($relative->sameHouse)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>Name of the relative:</strong> {{ $relative->alias }}<br>
                        <strong>Is he/she an alleged Offender</strong>
                        

		</p>
	</div>

</div>
</body>
</html>