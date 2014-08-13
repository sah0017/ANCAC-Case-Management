@extends('DHRCases.master')

@section('title')
@parent
::  DHR Cases
@stop

@section('content')


<h1>All of the DHRCases</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
                        <td>Household</td>
                        <td>Case Number</td>
                        <td>Status</td>
                        <td>Type</td>
                        <td>Opened</td>
                        <td>Closed</td>
		</tr>
	</thead>
	<tbody>
	@foreach($DHRCases as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
                        <td>{{ $value->household_id }}</td>
                        <td>{{ $value->caseNumber }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->type }}</td>
                        <td>{{ $value->opened }}</td>
                        <td>{{ $value->closed }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /address/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'DHRCases/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this DHR Case', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /address/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('DHRCases/' . $value->id) }}">Show this DHR Case</a>

				<!-- edit this nerd (uses the edit method found at GET /address/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('DHRCases/' . $value->id . '/edit') }}">Edit this DHR Case</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop
