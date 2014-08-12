@extends('people.master')

@section('title')
@parent
:: Person
@stop

@section('content')

<h1>All the People</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>Name</td>
			<td>DOB</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($people as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
			<td>{{ $value->dob }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the person (uses the destroy method DESTROY /people/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'people/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this person', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the person (uses the show method found at GET /people/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('people/' . $value->id) }}">Show this person</a>

				<!-- edit this person (uses the edit method found at GET /people/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('people/' . $value->id . '/edit') }}">Edit this person</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop