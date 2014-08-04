<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('households') }}">Households</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('households') }}">View All Households</a></li>
		<li><a href="{{ URL::to('households/create') }}">Create a Household</a>
	</ul>
</nav>

<h1>All the Households</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
		</tr>
	</thead>
	<tbody>
	@foreach($households as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /households/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the nerd (uses the show method found at GET /households/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('households/' . $value->id) }}">Show this Household</a>

				<!-- edit this nerd (uses the edit method found at GET /households/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('households/' . $value->id . '/edit') }}">Edit this Household</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>