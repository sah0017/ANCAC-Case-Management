<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('cases') }}">Case</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('cases') }}">View All Cases</a></li>
		<li><a href="{{ URL::to('cases/create') }}">Create Case</a>
	</ul>
</nav>

<h1>All the Cases</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                <td>ID</td>
                <td>Abuse ID</td>
                <td>Worker ID</td>
                <td>Abused Child ID</td>
                <td>Alleged Abuser ID</td>
                <td>Note</td>
                <td>Case Opened</td>
                <td>County ID</td>
                <td>DHR Case</td>
                <td>Custody Issues</td>
                <td>IO Report</td>
                <td>Domestic Violence</td>
                <td>Prosecution</td>
                <td>Reporter</td>
                <td>Abuse Date</td>
                <td>Abuse Location</td>
                <td>Report Nature</td>
                <td>DHR Determination</td>
                <td>Forensic Evaluation</td>
                <td>Status</td>
                <td>Parent Jurisdiction</td>
                <td>Charges Filed</td>
                <td>Agency Reported To</td>
                <td>Talked To Child</td>
                <td>Reported Date</td>
                </tr>
	</thead>
	<tbody>
	@foreach($case as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->abuse_id }}</td>
                        <td>{{ $value->worker_id }}</td>
                        <td>{{ $value->abusedChild_id }}</td>
                        <td>{{ $value->allegedAbuser_id }}</td>
                        <td>{{ $value->note }}</td>
                        <td>{{ $value->caseOpened }}</td>
                        <td>{{ $value->county_id }}</td>
                        <td>{{ $value->DHRCase }}</td>
                        @if ($value->custodyIssues)
			<td>yes</td>
                        @else
                        <td>no</td>
                        @endif
                        <td>{{ $value->IOReport }}</td>
                        @if ($value->domesticViolence)
			<td>yes</td>
                        @else
                        <td>no</td>
                        @endif
                         @if ($value->prosecution)
			<td>yes</td>
                        @else
                        <td>no</td>
                        @endif
                        <td>{{ $value->reporter }}</td>
                        <td>{{ $value->abuseDate }}</td>
                        <td>{{ $value->abuseLocation }}</td>
                        <td>{{ $value->reportedNature }}</td>
                        <td>{{ DHRDetermination }}</td>
                        <td>{{ $value->forensicEvaluation }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->parentJurisdiction }}</td>
                        <td>{{ $value->chargesFiled }}</td>
                        <td>{{ $value->agencyReportedTo }}</td>
                        <td>{{ $value->talkedToChild }}</td>
                        <td>{{ $value->reportedDate }}</td>
                        


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the cases (uses the destroy method DESTROY /case/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'cases/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this child', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
                                
				<!-- show the cases (uses the show method found at GET /case/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('cases/' . $value->id) }}">Show this Case</a>

				<!-- edit this cases (uses the edit method found at GET /case/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $value->id . '/edit') }}">Edit this Case</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>