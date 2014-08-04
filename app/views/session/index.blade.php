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
		<a class="navbar-brand" href="{{ URL::to('session') }}">session Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('session') }}">View All session</a></li>
		<li><a href="{{ URL::to('session/create') }}">Create a session entry</a>
	</ul>
</nav>

<h1>All the session</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>session type ID</td>
			<td>date</td>
                        <td>Time Start</td>
                        <td>Time End</td>
                        <td>Status</td>
			<td>worker ID</td>
                        <td>Discussed Abuse</td>
		</tr>
	</thead>
	<tbody>
	@foreach($session as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->serviceType_id }}</td>
			<td>{{ $value->date }}</td>
                        <td>{{ $value->timeStart }}</td>
                        <td>{{ $value->timeEnd }}</td>
                        <td>{{ $value->status }}</td>
			<td>{{ $value->worker_id }}</td>
                        <td>{{ $value->discussedAbuse }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the session (uses the destroy method DESTROY /session/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'session/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this session', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the session (uses the show method found at GET /session/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('session/' . $value->id) }}">Show this session</a>

				<!-- edit this session (uses the edit method found at GET /session/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('session/' . $value->id . '/edit') }}">Edit this session</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


</div>
</body>
</html>