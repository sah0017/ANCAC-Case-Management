<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('address') }}">Address</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('address') }}">View All Ethnicities</a></li>
		<li><a href="{{ URL::to('address/create') }}">Create a Address</a>
	</ul>
</nav>

<h1>All the Ethnicities</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
                        <td>Line 1</td>
                        <td>Line 2</td>
                        <td>City</td>
                        <td>State</td>
                        <td>Zip Code</td>
                        <td>County</td>
		</tr>
	</thead>
	<tbody>
	@foreach($address as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
                        <td>{{ $value->line1 }}</td>
                        <td>{{ $value->line2 }}</td>
                        <td>{{ $value->city }}</td>
                        <td>{{ $value->state }}</td>
                        <td>{{ $value->zip }}</td>
                        <td>{{ $value->counties->name }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /address/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'address/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this address', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /address/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('address/' . $value->id) }}">Show this Address</a>

				<!-- edit this nerd (uses the edit method found at GET /address/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('address/' . $value->id . '/edit') }}">Edit this Address</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>