@extends('allegedOffenders.master')

@section('title')
@parent
:: Alleged Offender
@stop

@section('content')

<h1>All the Alleged Offenders</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>Person</td>
                        <td>Case</td>
                        <td>County</td>
		</tr>
	</thead>
	<tbody>
	@foreach($allegedOffenders as $key => $value)
		<tr>
                        <td>{{ $value->person_id }}</td>
                        <td>{{ $value->case_id }}</td>
                        <td>{{ $value->county_id }}</td>



			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the allegedOffender (uses the destroy method DESTROY /allegedOffenders/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'allegedOffenders/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this allegedOffender', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}

				<!-- show the allegedOffender (uses the show method found at GET /allegedOffenders/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('allegedOffenders/' . $value->id) }}">Show this allegedOffender</a>

				<!-- edit this allegedOffender (uses the edit method found at GET /allegedOffenders/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('allegedOffenders/' . $value->id . '/edit') }}">Edit this allegedOffender</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


@stop