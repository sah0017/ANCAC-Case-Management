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

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the child (uses the destroy method DESTROY /children/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'workers/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this worker', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}

				<!-- show the child (uses the show method found at GET /children/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('workers/' . $value->id) }}">Show this Relation</a>

				<!-- edit this child (uses the edit method found at GET /children/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('workers/' . $value->id . '/edit') }}">Edit this Relation</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop
