<html>
<head>
	<title>ANCAC DHR Cases</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('DHRCases') }}">DHRCases</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('DHRCases') }}">View All DHRCases</a></li>
		<li><a href="{{ URL::to('DHRCases/create') }}">Create a DHRCases</a>
	</ul>
</nav>

<h1>All of the DHRCases</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
                        <td>Household</td>
                        <td>Case Number</td>
                        <td>Status</td>
                        <td>Type</td>
                        <td>Opened</td>
                        <td>Closed</td>
		</tr>
	</thead>
	<tbody>
	@foreach($DHRCases as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
                        <td>{{ $value->household_id }}</td>
                        <td>{{ $value->caseNumber }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->type }}</td>
                        <td>{{ $value->opened }}</td>
                        <td>{{ $value->closed }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /address/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'DHRCases/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this DHR Case', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /address/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('DHRCases/' . $value->id) }}">Show this Address</a>

				<!-- edit this nerd (uses the edit method found at GET /address/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('DHRCases/' . $value->id . '/edit') }}">Edit this Address</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>

