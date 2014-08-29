@extends('workers.master')

@section('title')
@parent
:: Worker
@stop

@section('content')
    
    <h1>all the Workers</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>Name</td>
			<td>Worker Type</td>
			
		</tr>
	</thead>
	<tbody>
	@foreach($workers as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->workerType->type }}</td>

			<!-- we will also add edit button -->
			<td>
				
				<!-- edit this child (uses the edit method found at GET /children/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('workers/' . $value->id . '/edit') }}">Edit</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop
