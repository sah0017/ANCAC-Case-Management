@extends('county.master')

@section('title')
@parent
:: County
@stop

@section('content')

<h1>All the Counties</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>
	@foreach($county as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>


			<!-- we will also add edit button -->
			<td>

				<!-- edit this nerd (uses the edit method found at GET /county/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('county/' . $value->id . '/edit') }}">Edit</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop