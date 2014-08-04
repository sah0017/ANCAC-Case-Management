<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('phones') }}">Phones</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('phones') }}">View All Phones</a></li>
		<li><a href="{{ URL::to('phones/create') }}">Create a Phone</a>
	</ul>
</nav>

<h1>Showing {{ $Phones->type }}</h1>


</div>
</body>
</html>

