<!-- app/views/people/show.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('people') }}">People list</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('people') }}">View All people</a></li>
		<li><a href="{{ URL::to('people/create') }}">Create a person entry</a>
	</ul>
</nav>

<h1>Showing {{ $person->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $person->name }}</h2>
		<p>
			<strong>person_id:</strong> {{ $person->person_id }}<br>
			<strong>Name:</strong> {{ $person->name }}<br>
                        <strong>DOB:</strong> {{ $person->dob }}<br>
                        <strong>drugUse:</strong>
                        @if ($person->drugUse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>physicalAbuse:</strong>
                        @if ($person->physicalAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>sexAbuse:</strong>
                        @if ($person->sexAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>mentalHealthTreatment:</strong>
                        @if ($person->mentalHealthTreatment)
                         yes
                        @else
                         no
                        @endif
                        <br
                        <strong>crimeConviction:</strong>
                        @if ($person->crimeConviction)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>employed:</strong>
                        @if ($person->employed)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>fullTime:</strong>
                        @if ($person->fullTime)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>activeMilitary:</strong>
                        @if ($person->activeMilitary)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>sexAbuseSurvivor:</strong>
                        @if ($person->sexAbuseSurvivor)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>originCountry</strong> {{ $person->originCountry }}<br>
                        <strong>specialNeeds:</strong>
                        @if ($person->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>disability:</strong>
                        @if ($person->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>language:</strong> {{ $person->language }}<br>
                        <strong>maritalStatus:</strong> {{ $person->maritalStatus }}<br>
                        <strong>address_id</strong> {{ $person->address_id }}<br>
                        <strong>household_id</strong> {{ $person->household_id }}<br>
                        <strong>ethnicity_id</strong> {{ $person->ethnicity_id }}<br>

		</p>
	</div>

</div>
</body>
</html>