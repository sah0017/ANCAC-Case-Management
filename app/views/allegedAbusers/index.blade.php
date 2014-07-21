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
		<a class="navbar-brand" href="{{ URL::to('allegedAbusers') }}">AllegedAbuser Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('allegedAbusers') }}">View All allegedAbusers</a></li>
		<li><a href="{{ URL::to('allegedAbusers/create') }}">Create a allegedAbuser entry</a>
	</ul>
</nav>

<h1>All the allegedAbusers</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>person info ID</td>
			<td>medicalCompleted</td>
			<td>schoolGrade</td>
                        <td>school</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($allegedAbusers as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->person_id }}</td>
                        @if ($value->known)
			<td>yes</td>
                        @else
                        <td>no</td>
                        @endif
                        @if ($value->adult)
			<td>yes</td>
                        @else
                        <td>no</td>
                        @endif

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the allegedAbuser (uses the destroy method DESTROY /allegedAbusers/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'allegedAbusers/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this allegedAbuser', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the allegedAbuser (uses the show method found at GET /allegedAbusers/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('allegedAbusers/' . $value->id) }}">Show this allegedAbuser</a>

				<!-- edit this allegedAbuser (uses the edit method found at GET /allegedAbusers/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('allegedAbusers/' . $value->id . '/edit') }}">Edit this allegedAbuser</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


</div>
</body>
</html>