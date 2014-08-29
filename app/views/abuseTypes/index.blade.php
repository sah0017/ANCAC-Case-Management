@extends('abuseTypes.master')

@section('title')
@parent
:: Abuse Type
@stop

@section('content')

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


			<!-- we will also add edit button -->
			<td>

				
				<!-- edit this nerd (uses the edit method found at GET /abuseTypes/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('abuseTypes/' . $value->id . '/edit') }}">Edit</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop