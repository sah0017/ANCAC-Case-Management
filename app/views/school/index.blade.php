@extends('school.master')

@section('title')
@parent
:: Create School
@stop

@section('content')

<h1>All the School</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>School</td>
		</tr>
	</thead>
	<tbody>
	@foreach($school as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>


			<!-- we will also add edit button -->
			<td>
				
				<!-- edit this nerd (uses the edit method found at GET /serviceType/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('school/' . $value->id . '/edit') }}">Edit</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop
