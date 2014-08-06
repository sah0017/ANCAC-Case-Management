<html>
<head>
	<title>ANCAC Worker Type</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('workerType') }}">Worker Type Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('workerType') }}">View All Worker Types</a></li>
		<li><a href="{{ URL::to('workerType/create') }}">Create a Worker Type</a>
	</ul>
</nav>

<h1>Showing {{ $WorkerType->type }}</h1>


</div>
</body>
</html>

