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
		<a class="navbar-brand" href="{{ URL::to('children') }}">Child Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('children') }}">View All children</a></li>
		<li><a href="{{ URL::to('children/create') }}">Create a child entry</a>
	</ul>
</nav>

<h1>All the children</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>Name</td>
			<td>medicalCompleted</td>
			<td>schoolGrade</td>
                        <td>school</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($children as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->personalInfo->name }}</td>
                        @if ($value->medicalCompleted)
			<td>yes</td>
                        @else
                        <td>no</td>
                        @endif
			<td>{{ $value->schoolGrade }}</td>
			<td>{{ $value->school }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the child (uses the destroy method DESTROY /children/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'children/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this child', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the child (uses the show method found at GET /children/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('children/' . $value->id) }}">Show this child</a>

				<!-- edit this child (uses the edit method found at GET /children/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('children/' . $value->id . '/edit') }}">Edit this child</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


</div>
</body>
</html>