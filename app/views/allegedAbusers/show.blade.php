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
			<strong>name:</strong> {{ $allegedAbuser->personalInfo->name }}<br>
                        <strong>known abuser:</strong>
                        @if ($allegedAbuser->known)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>adult:</strong>
                        @if ($allegedAbuser->adult)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>DOB:</strong> {{ $allegedAbuser->personalInfo->dob }}<br>
                        <strong>drug use history:</strong>
                        @if ($allegedAbuser->personalInfo->drugUse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>physicalAbuse:</strong>
                        @if ($allegedAbuser->personalInfo->physicalAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>sexAbuse:</strong>
                        @if ($allegedAbuser->personalInfo->sexAbuse)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>mentalHealthTreatment:</strong>
                        @if ($allegedAbuser->personalInfo->mentalHealthTreatment)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>crimeConviction:</strong>
                        @if ($allegedAbuser->personalInfo->crimeConviction)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>employed:</strong>
                        @if ($allegedAbuser->personalInfo->employed)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>fullTime:</strong>
                        @if ($allegedAbuser->personalInfo->fullTime)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>activeMilitary:</strong>
                        @if ($allegedAbuser->personalInfo->activeMilitary)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>sexAbuseSurvivor:</strong>
                        @if ($allegedAbuser->personalInfo->sexAbuseSurvivor)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>originCountry</strong> {{ $allegedAbuser->personalInfo->originCountry }}<br>
                        <strong>specialNeeds:</strong>
                        @if ($allegedAbuser->personalInfo->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>disability:</strong>
                        @if ($allegedAbuser->personalInfo->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>language:</strong> {{ $allegedAbuser->personalInfo->language }}<br>
                        <strong>address_id</strong> {{ $allegedAbuser->personalInfo->address_id }}<br>
                        <strong>household_id</strong> {{ $allegedAbuser->personalInfo->household_id }}<br>
                        <strong>ethnicity_id</strong> {{ $allegedAbuser->personalInfo->ethnicity_id }}<br>
		</p>
	</div>

</div>
</body>
</html>