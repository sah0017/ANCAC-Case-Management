@extends('workerType.master')

@section('title')
@parent
:: Worker Type
@stop

@section('content')

<h1>All the Worker Types</h1>

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
	@foreach($workerType as $key => $value)
		<tr>
			<td>{{ $value->type }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>
                                @if($value->center_id == Auth::User()->center_id)
				<!-- delete the type (uses the destroy method DESTROY /workerType/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'workerType/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /workerType/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('workerType/' . $value->id) }}">Show</a>

				<!-- edit this nerd (uses the edit method found at GET /workerType/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('workerType/' . $value->id . '/edit') }}">Edit</a>
                                @else
                                <span class="label label-info">Global Type</span>
                                @endif
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop
