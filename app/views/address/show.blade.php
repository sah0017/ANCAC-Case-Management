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

<h1>Showing {{ $Address->address }}</h1>


</div>
</body>
</html>
