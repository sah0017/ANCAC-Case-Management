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
		<a class="navbar-brand" href="{{ URL::to('children') }}">Child Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('children') }}">View All children</a></li>
		<li><a href="{{ URL::to('children/create') }}">Create a child entry</a>
	</ul>
</nav>

<h1>Showing {{ $child->personalInfo->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $child->name }}</h2>
		<p>
			<strong>Name:</strong> {{ $child->personalInfo->name }}<br>
                        <strong>DOB:</strong> {{ $child->personalInfo->dob }}<br>
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
                        <strong>originCountry</strong> {{ $child->personalInfo->originCountry }}<br>
                        <strong>specialNeeds:</strong>
                        @if ($child->personalInfo->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>disability:</strong>
                        @if ($child->personalInfo->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>language:</strong> {{ $child->personalInfo->language }}<br>
                        <strong>address_id</strong> {{ $child->personalInfo->address_id }}<br>
                        <strong>household_id</strong> {{ $child->personalInfo->household_id }}<br>
                        <strong>ethnicity_id</strong> {{ $child->personalInfo->ethnicity_id }}<br>

		</p>
	</div>

</div>
</body>
</html>