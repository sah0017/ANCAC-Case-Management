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


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /relativeType/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                <a{{ Form::open(array('url' => 'relativeType/' . $value->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this relativeType', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}</a>
				<!-- show the nerd (uses the show method found at GET /relativeType/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('relativeType/' . $value->id) }}">Show this Relative Type</a>

				<!-- edit this nerd (uses the edit method found at GET /relativeType/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('relativeType/' . $value->id . '/edit') }}">Edit this Relative Type</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>
