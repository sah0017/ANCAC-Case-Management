<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('county') }}">County</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('county') }}">View All County</a></li>
		<li><a href="{{ URL::to('county/create') }}">Create a County</a>
	</ul>
</nav>

<h1>All the Worker Types</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Type</td>
		</tr>
	</thead>
	<tbody>
	@foreach($county as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /county/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'county/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this county', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /county/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('county/' . $value->id) }}">Show this County</a>

				<!-- edit this nerd (uses the edit method found at GET /county/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('county/' . $value->id . '/edit') }}">Edit this County</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>
