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
			<strong>Case Info <?php echo Form::submit('edit'); ?> </strong><br>
			<strong>opened:</strong> {{ $case->caseOpened }}<br>
			<strong>status:</strong> {{ $case->status }}
			</div>
			<div class="column-left">
			<strong>Child info <a class="btn btn-small btn-info" href="{{ URL::to('children/' . $case->abusedChild_id . '/edit') }}">Edit this child</a> </strong><br>
                        {{$case->abusedChild->personalInfo->name}}<br>
                        {{$case->abusedChild->personalInfo->dob}}<br>
			<br><br>
			<strong>Accused info <a class="btn btn-small btn-info" href="{{ URL::to('allegedAbusers/' . $case->allegedAbuser_id . '/edit') }}">Edit this abuser</a> </strong>
			</div>
			<div class="column-right">
			<strong>Workers <?php echo Form::submit('edit'); ?> </strong>
			<br><br>
                            <div class= "column-left">
                                <strong> Name </strong>
                            </div>
                            <div class= "column-right">
                                <strong> Type </strong>
                            </div>
                        <br><br>
			<strong>Relations <a class="btn btn-small btn-info" href="{{ URL::to('relatives/' . $case->id . '/edit') }}">Edit this child</a> </strong>
			<br><br>
                            <div class= "column-left">
                                <strong> Name </strong>
                            </div>
                            <div class= "column-right">
                                <strong> Type </strong>
                            </div>
                        <br><br>
			<strong>Services Provided <?php echo Form::submit('edit'); ?> </strong>
			</div>
		</div>
		<strong>Notes</strong><br>
		{{$case->note}}
		</p>
	</div>


</div>
</body>
</html>