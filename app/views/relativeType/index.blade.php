<html>
<head>
	<title>ANCAC Relative Type</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('relativeType') }}">Relative Types</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('relativeType') }}">View All Relative Types</a></li>
		<li><a href="{{ URL::to('relativeType/create') }}">Create a Relative Type</a>
	</ul>
</nav>

<h1>All the Relative Types</h1>

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
	@foreach($relativeType as $key => $value)
		<tr>
			<td>{{ $value->type }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /relativeType/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'relativeType/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this relativeType', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /relativeType/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('relativeType/' . $value->id) }}">Show this Relative Type</a>

				<!-- edit this nerd (uses the edit method found at GET /relativeType/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('relativeType/' . $value->id . '/edit') }}">Edit this Relative Type</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>
