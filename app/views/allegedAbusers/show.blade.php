<!-- app/views/allegedAbusers/show.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('allegedAbusers') }}">AllegedAbuser Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedAbusers') }}">View All allegedAbusers</a></li>
		<li><a href="{{ URL::to('allegedAbusers/create') }}">Create a allegedAbuser entry</a>
	</ul>
</nav>

<h1>Showing {{ $allegedAbuser->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $allegedAbuser->name }}</h2>
		<p>
			<strong>person_id:</strong> {{ $allegedAbuser->person_id }}<br>
                        <strong>known abuser:</strong>
                        @if ($allegedAbuser->medicalCompleted)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>adult:</strong>
                        @if ($allegedAbuser->medicalCompleted)
                         yes
                        @else
                         no
                        @endif
                        <br>
		</p>
	</div>

</div>
</body>
</html>