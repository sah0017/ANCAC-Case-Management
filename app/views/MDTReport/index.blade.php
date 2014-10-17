@extends('MDTReport.master')

@section('title')
@parent
:: Create MDTReport
@stop

@section('content')

<h1>All the MDTReports</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                <td>Date</td>
                <td>Location</td>
                <td>Cases</td>
                </tr>
	</thead>
	<tbody>
	@foreach($MDTReport as $key => $value)
		<tr>
                        <td>{{ $value->date }}</td>
                        <td>{{ $value->location }}</td>
                        <td>{{ $value->cases->count() }}</td>


                        


			<!-- we will also add Case Details button -->
			<td>
				
				<!-- show the cases (uses the show method found at GET /case/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('cases/' . $value->id) }}">Case Details</a>

				<!-- edit this cases (uses the edit method found at GET /case/{id}/edit -->
				

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop