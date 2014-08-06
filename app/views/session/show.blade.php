<!-- app/views/session/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Session</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('session') }}">session Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('session') }}">View All session</a></li>
		<li><a href="{{ URL::to('session/create') }}">Create a session entry</a>
	</ul>
</nav>

<h1>Showing {{ $session->personalInfo->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $session->name }}</h2>
		<p>
			<strong>Service Type:</strong> {{ $session->personalInfo->serviceType_id }}<br>
                        <strong>Date:</strong> {{ $session->personalInfo->date }}<br>
                        <strong>Time Start:</strong> {{ $session->personalInfo->timeStart }}<br>
                        <strong>Time End:</strong> {{ $session->personalInfo->timeEnd }}<br>
                        <strong>Status:</strong> {{ $session->personalInfo->status }}<br>
			<strong>MDT Worker:</strong> {{ $session->parentalInfo->Worker_id }}<br>
                        <strong>Discussed Abuse:</strong> {{ $session->personalInfo->discussedAbuse }}<br>
                        
		</p>
	</div>

</div>
</body>
</html>