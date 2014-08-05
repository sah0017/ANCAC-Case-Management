<html>
<head>
	<title>ANCAC Abuse Types</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('abuseTypes') }}">Abuse Types</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('abuseTypes') }}">View All Abuse Types</a></li>
		<li><a href="{{ URL::to('abuseTypes/create') }}">Create a Abuse Type</a>
	</ul>
</nav>

<h1>All the Abuse Types</h1>

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
	@foreach($abuseTypes as $key => $value)
		<tr>
			<td>{{ $value->type }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /abuseTypes/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the nerd (uses the show method found at GET /abuseTypes/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('abuseTypes/' . $value->id) }}">Show this Abuse Type</a>

				<!-- edit this nerd (uses the edit method found at GET /abuseTypes/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('abuseTypes/' . $value->id . '/edit') }}">Edit this Abuse Type</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>