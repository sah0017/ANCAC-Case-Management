<!-- app/views/people/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC People</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('people') }}">People List</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('people') }}">View All People</a></li>
		<li><a href="{{ URL::to('people/create') }}">Create a Person Entry</a>
	</ul>
</nav>

<h1>Showing {{ $person->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $person->name }}</h2>
		<p>
			<strong>Person:</strong> {{ $person->person_id }}<br>
			<strong>Name:</strong> {{ $person->name }}<br>
                        <strong>DOB:</strong> {{ $person->dob }}<br>
                        <strong>Drug Use:</strong>
                        @if ($person->drugUse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Physical Abuse:</strong>
                        @if ($person->physicalAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Sex Abuse:</strong>
                        @if ($person->sexAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Mental Health Treatment:</strong>
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
                        <strong>Employed:</strong>
                        @if ($person->employed)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Full Time:</strong>
                        @if ($person->fullTime)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Active Military:</strong>
                        @if ($person->activeMilitary)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Sex Abuse Survivor:</strong>
                        @if ($person->sexAbuseSurvivor)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Origin Country</strong> {{ $person->originCountry }}<br>
                        <strong>specialNeeds:</strong>
                        @if ($person->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Disability:</strong>
                        @if ($person->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>Language:</strong> {{ $person->language }}<br>
                        <strong>Marital Status:</strong> {{ $person->maritalStatus }}<br>
                        <strong>Address</strong> {{ $person->address_id }}<br>
                        <strong>Household</strong> {{ $person->household_id }}<br>
                        <strong>Ethnicity</strong> {{ $person->ethnicity_id }}<br>

		</p>
	</div>

</div>
</body>
</html>