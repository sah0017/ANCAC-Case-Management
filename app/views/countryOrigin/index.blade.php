@extends('countryOrigin.master')

@section('title')
@parent
:: Create Country of Origin
@stop

@section('content')

<h1>All Country of Origin</h1>

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
	@foreach($countryOrigin as $key => $value)
		<tr>
			<td>{{ $value->name }}</td>


			<!-- we will also add edit button -->
			<td>
			@if( UserController::getLevel() == 3 )	
				<!-- edit this nerd (uses the edit method found at GET /countryOrigin/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('countryOrigin/' . $value->id . '/edit') }}">Edit</a>
                        @endif
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop
