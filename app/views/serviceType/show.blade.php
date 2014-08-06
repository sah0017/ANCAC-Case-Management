<html>
<head>
	<title>ANCAC Service Type</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('serviceType') }}">Service Type Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('serviceType') }}">View All Service Type</a></li>
		<li><a href="{{ URL::to('serviceType/create') }}">Create a Service Type</a>
	</ul>
</nav>

<h1>Showing {{ $serviceType->type }}</h1>


</div>
</body>
</html>