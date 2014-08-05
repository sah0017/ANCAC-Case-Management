<html>
<head>
	<title>ANCAC County</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('county') }}">Caounty</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('county') }}">View All Counties</a></li>
		<li><a href="{{ URL::to('county/create') }}">Create a County</a>
	</ul>
</nav>

<h1>Showing {{ $County->name }}</h1>


</div>
</body>
</html>

