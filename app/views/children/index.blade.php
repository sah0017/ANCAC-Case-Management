@extends('children.master')

@section('title')
@parent
:: Children
@stop

@section('content')

<h1>All the Children</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>Name</td>
			<td>Medical Completed</td>
			<td>School Grade</td>
                        <td>School</td>
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
				{{ Form::open(array('url' => 'children/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}

				<!-- show the child (uses the show method found at GET /children/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('children/' . $value->id) }}">Show</a>

				<!-- edit this child (uses the edit method found at GET /children/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('children/' . $value->id . '/edit') }}">Edit</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop