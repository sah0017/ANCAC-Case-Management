@extends('households.master')

@section('title')
@parent
:: Household
@stop

@section('content')

<h1>All the Households</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
		</tr>
	</thead>
	<tbody>
	@foreach($households as $key => $value)
		<tr>
			<td>{{ $value->ID }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /households/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                 <a{{ Form::open(array('url' => 'households/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this household', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}</a>
				<!-- show the nerd (uses the show method found at GET /households/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('households/' . $value->id) }}">Show this Household</a>

				<!-- edit this nerd (uses the edit method found at GET /households/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('households/' . $value->id . '/edit') }}">Edit this Household</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop