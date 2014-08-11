@extends('ethnicity.master')

@section('title')
@parent
:: Ethnicity
@stop

@section('content')

<h1>All the Ethnicities</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Ethnicity</td>
		</tr>
	</thead>
	<tbody>
	@foreach($ethnicity as $key => $value)
		<tr>
			<td>{{ $value->ethnicity }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /ethnicity/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'ethnicity/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this ethnicity', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /ethnicity/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('ethnicity/' . $value->id) }}">Show this Ethnicity</a>

				<!-- edit this nerd (uses the edit method found at GET /ethnicity/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('ethnicity/' . $value->id . '/edit') }}">Edit this Ethnicity</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>

