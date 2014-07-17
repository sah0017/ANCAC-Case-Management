<!-- app/views/children/show.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('children') }}">Nerd Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('children') }}">View All children</a></li>
		<li><a href="{{ URL::to('children/create') }}">Create a child entry</a>
	</ul>
</nav>

<h1>Showing {{ $child->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $child->name }}</h2>
		<p>
			<strong>person_id:</strong> {{ $child->person_id }}<br>
			<strong>parentalHistory:</strong> {{ $child->parentalHistory }}<br>
                        <strong>parentStatus:</strong> {{ $child->parentStatus }}<br>
                        <strong>medicalCompleted:</strong>
                        @if ($child->medicalCompleted)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>schoolGrade:</strong> {{ $child->schoolGrade }}<br>
			<strong>school:</strong> {{ $child->school }}<br>

		</p>
	</div>

</div>
</body>
</html>