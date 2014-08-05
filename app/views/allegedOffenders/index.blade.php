<!DOCTYPE html>
<html>
<head>
	<title>ANCAC Alleged Offenders</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('allegedOffenders') }}">Alleged Offender Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedOffenders') }}">View All Alleged Offenders</a></li>
		<li><a href="{{ URL::to('allegedOffenders/create') }}">Create a Alleged Offender Entry</a>
	</ul>
</nav>

<h1>All the Alleged Offenders</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>Person</td>
                        <td>Case</td>
                        <td>County</td>
		</tr>
	</thead>
	<tbody>
	@foreach($allegedOffenders as $key => $value)
		<tr>
                        <td>{{ $value->person_id }}</td>
                        <td>{{ $value->case_id }}</td>
                        <td>{{ $value->county_id }}</td>



			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the allegedOffender (uses the destroy method DESTROY /allegedOffenders/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'allegedOffenders/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this allegedOffender', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the allegedOffender (uses the show method found at GET /allegedOffenders/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('allegedOffenders/' . $value->id) }}">Show this allegedOffender</a>

				<!-- edit this allegedOffender (uses the edit method found at GET /allegedOffenders/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('allegedOffenders/' . $value->id . '/edit') }}">Edit this allegedOffender</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


</div>
</body>
</html>