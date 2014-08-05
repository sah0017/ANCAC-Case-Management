<!-- app/views/children/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Children</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('children') }}">Child Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('children') }}">View All Children</a></li>
		<li><a href="{{ URL::to('children/create') }}">Create a Child Entry</a>
	</ul>
</nav>

<h1>Showing {{ $child->personalInfo->name }}</h1><a class="btn btn-small btn-info" href="child/edit">Edit</a> 

	<div class="jumbotron text-left">
		<h2>{{ $child->name }}</h2>
		<p>
			<strong>Name:</strong> {{ $child->personalInfo->name }}<br>
                        <strong>DOB:</strong> {{ $child->personalInfo->dob }}<br>
			<strong>Parental History:</strong> {{ $child->parentalHistory }}<br>
                        <strong>Parent Status:</strong> {{ $child->parentStatus }}<br>
                        <strong>Medical Completed:</strong>
                        @if ($child->medicalCompleted)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>School Grade:</strong> {{ $child->schoolGrade }}<br>
			<strong>School:</strong> {{ $child->school }}<br>
                        <strong>Origin Country:</strong> {{ $child->personalInfo->originCountry }}<br>
                        <strong>Special Needs:</strong>
                        @if ($child->personalInfo->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Disability:</strong>
                        @if ($child->personalInfo->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>Language:</strong> {{ $child->personalInfo->language }}<br>
                        <strong>Address:</strong> {{ $child->personalInfo->address_id }}<br>
                        <strong>Household:</strong> {{ $child->personalInfo->household_id }}<br>
                        <strong>Ethnicity:</strong> {{ $child->personalInfo->ethnicity_id }}<br>

		</p>
	</div>

</div>
</body>
</html>