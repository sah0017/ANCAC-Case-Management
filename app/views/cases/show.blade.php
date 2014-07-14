<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/show.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('cases') }}">Case info</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('cases') }}">View All Cases</a></li>
		<li><a href="{{ URL::to('cases/create') }}">Create a Case Type</a>
	</ul>
</nav>

<h1>Showing case {{ $case->id }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $case->id }}</h2>
		<p>
		
		<div class="container">
			<div class="column-center">
			<strong>Case Info</strong><br>
			<strong>opened:</strong> {{ $case->caseOpened }}<br>
			<strong>status:</strong> {{ $case->status }}
			</div>
			<div class="column-left">
			<strong>Child info</strong>
			
			<br><br>
			<strong>Accused info</strong>
			</div>
			<div class="column-right">
			<strong>Workers</strong>
			<br><br>
			<strong>Relations</strong>
			<br><br>
			<strong>Services Provided</strong>
			</div>
		</div>
		<strong>Notes</strong><br>
		{{$case->note}}
		</p>
	</div>


</div>
</body>
</html>