<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('serviceType') }}">Service Type</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('serviceType') }}">View All Service Type</a></li>
		<li><a href="{{ URL::to('serviceType/create') }}">Create a Service Type</a>
	</ul>
</nav>

<h1>All the Service Type</h1>

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
	@foreach($serviceType as $key => $value)
		<tr>
			<td>{{ $value->type }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /serviceType/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the nerd (uses the show method found at GET /serviceType/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('serviceType/' . $value->id) }}">Show this Service Type</a>

				<!-- edit this nerd (uses the edit method found at GET /serviceType/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('serviceType/' . $value->id . '/edit') }}">Edit this Service Type</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>