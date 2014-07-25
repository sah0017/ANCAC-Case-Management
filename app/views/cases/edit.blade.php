<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('cases') }}">Case Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('cases') }}">View All Cases</a></li>
		<li><a href="{{ URL::to('cases/create') }}">Create Case</a>
	</ul>
</nav>

<h1>Edit {{ $case->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($case, array('route' => array('cases.update', $case->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('abuse_id', 'abuse_id') }}
		{{ Form::select('abuse_id', AbuseType::all()->lists('type','id'), Input::old('abuse_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('worker_id', 'worker_id') }}
		{{ Form::text('worker_id', Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('note', 'note') }}
		{{ Form::text('note', Input::old('note'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('caseOpened', 'caseOpened') }}
		{{ Form::text('caseOpened', Input::old('caseOpened'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'county_id') }}
		{{ Form::text('county_id', Input::old('county_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('DHRCase', 'DHRCase') }}
		{{ Form::text('DHRCase', Input::old('DHRCase'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('custodyIssues', 'Is There Custody Issues') }}
		{{ Form::checkbox('custodyIssues', '1', Input::old('custodyIssues'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('IOReport', 'IOReport') }}
		{{ Form::text('IOReport', Input::old('IOReport'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('domesticViolence', 'Is There Domestic Violence') }}
		{{ Form::checkbox('domesticViolence', '1', Input::old('domesticViolence'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('prosecution', 'Was there Prosecution') }}
		{{ Form::checkbox('prosecution', '1', Input::old('prosecution'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('reporter', 'reporter') }}
		{{ Form::text('reporter', Input::old('reporter'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('abuseDate', 'abuseDate') }}
		{{ Form::text('abuseDate', Input::old('abuseDate'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('abuseLocation', 'abuseLocation') }}
		{{ Form::text('abuseLocation', Input::old('abuseLocation'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('reportNature', 'reportNature') }}
		{{ Form::text('reportNature', Input::old('reportNature'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('DHRDetermination', 'DHRDetermination') }}
		{{ Form::select('DHRDetermination', array('0' => 'Select a Determination', '1' => 'Valid',
                            '2' => 'Not Valid', '3' => 'Unknown'), 
                    Input::old('DHRDetermination'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('forensicEvaluation', 'Was there a Forensic Evaluation') }}
		{{ Form::checkbox('forensicEvaluation', '1', Input::old('forensicEvaluation'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('status', 'status') }}
		{{ Form::select('status', array('0' => 'Select Status', '1' => 'Open',
                            '2' => 'Closed'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('parentJurisdiction', 'parentJurisdiction') }}
		{{ Form::text('parentJurisdiction', Input::old('parentJurisdiction'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('chargesFiled', 'chargesFiled') }}
		{{ Form::text('chargesFiled', Input::old('chargesFiled'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('agencyReportedTo', 'agencyReportedTo') }}
		{{ Form::text('agencyReportedTo', Input::old('agencyReportedTo'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('talkedToChild', 'talkedToChild') }}
		{{ Form::text('talkedToChild', Input::old('talkedToChild'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('reportedDate', 'reportedDate') }}
		{{ Form::text('reportedDate', Input::old('reportedDate'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Case!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
