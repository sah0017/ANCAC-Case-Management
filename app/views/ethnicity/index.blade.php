@extends('ethnicity.master')

@section('title')
@parent
:: Ethnicity
@stop

@section('content')

<h1>All the Ethnicities</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Ethnicity</td>
		</tr>
	</thead>
	<tbody>
	@foreach($ethnicity as $key => $value)
		<tr>
			<td>{{ $value->ethnicity }}</td>


			<!-- we will also add edit button -->
			<td>

				<!-- edit this nerd (uses the edit method found at GET /ethnicity/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('ethnicity/' . $value->id . '/edit') }}">Edit</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop