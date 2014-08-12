@extends('phones.master')

@section('title')
@parent
:: Phone
@stop

@section('content')

<h1>All the Phones</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Id</td>
                        <td>Person Id</td>
                        <td>Number</td>
                        <td>Type</td>
		</tr>
	</thead>
	<tbody>
	@foreach($phones as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
                        <td>{{ $value->person_id }}</td>
                        <td>{{ $value->number }}</td>
                        <td>{{ $value->type }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /phones/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                <a{{ Form::open(array('url' => 'phones/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this phones', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}</a>
				<!-- show the nerd (uses the show method found at GET /phones/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('phones/' . $value->id) }}">Show this Phone</a>

				<!-- edit this nerd (uses the edit method found at GET /phones/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('phones/' . $value->id . '/edit') }}">Edit this Phone</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop