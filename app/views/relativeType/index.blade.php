@extends('relativeType.master')

@section('title')
@parent
:: Relative Type
@stop

@section('content')

<h1>All the Relative Types</h1>

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
	@foreach($relativeType as $key => $value)
		<tr>
			<td>{{ $value->type }}</td>


			<!-- we will also add edit button -->
			<td>
                            @if( UserController::getLevel() == 3 )
				<!-- edit this nerd (uses the edit method found at GET /relativeType/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('relativeType/' . $value->id . '/edit') }}">Edit</a>
                            @endif
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop