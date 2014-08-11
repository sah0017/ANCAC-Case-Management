<html>
<head>
	<title>ANCAC DHR Cases</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('DHRCases') }}">DHRCases</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('DHRCases') }}">View All DHRCases</a></li>
		<li><a href="{{ URL::to('DHRCases/create') }}">Create a DHRCases</a>
	</ul>
</nav>
    
    <h1>Showing {{ $DHRCases->id }}</h1>

	<div class="jumbotron text-left">
		<p>
                    <strong>Household</strong>{{ $DHRCases->household_id }}<br>
                    <strong>Case Number</strong>{{ $DHRCases->caseNumber }}<br>
                    <strong>Status</strong>{{ $DHRCases->status }}<br>
                    <strong>Type</strong>{{ $DHRCases->type }}<br>
                    <strong>Date Open</strong>{{ $DHRCases->opened }}<br>
                    <strong>Date Close</strong>{{ $DHRCases->closed }}<br>


		</p>
	</div>

</div>
</body>
</html>
