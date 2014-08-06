<!-- app/views/workers/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Workers</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('workers') }}">Workers</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('workers') }}">View All Workers for the Case</a></li>
		<li><a href="{{ URL::to('workers/create') }}">Create a Worker Entry</a>
	</ul>
</nav>
    
    </nav>

    <h1>Showing {{ $worker->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $worker->name }}</h2>
		<p>
			<strong>Name of Worker:</strong> {{ $worker->name }}<br>
                        

		</p>
	</div>

</div>
</body>
</html>