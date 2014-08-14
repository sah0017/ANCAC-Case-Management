@extends('abuseTypes.master')

@section('title')
@parent
:: Abuse Type
@stop

@section('content')

<h1>All the Abuse Types</h1>

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
	@foreach($abuseTypes as $key => $value)
		<tr>
			<td>{{ $value->type }}</td>


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /abuseTypes/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                {{ Form::open(array('url' => 'abuseType/' . $value->id, 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Abuse Type.', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /abuseTypes/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('abuseTypes/' . $value->id) }}">Show this Abuse Type</a>

				<!-- edit this nerd (uses the edit method found at GET /abuseTypes/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('abuseTypes/' . $value->id . '/edit') }}">Edit this Abuse Type</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop