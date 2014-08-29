@extends('cases.master')

@section('title')
@parent
:: Case
@stop

@section('content')

<h1>All the Cases</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                <td>Number</td>
                <td>Abused Child</td>
                <td>Case Opened</td>
                </tr>
	</thead>
	<tbody>
	@foreach($case as $key => $value)
		<tr>
                        <td>{{ $value->caseNumber }}</td>
                        <td>{{ $value->abusedChild->personalInfo->name }}</td>
                        <td>{{ $value->caseOpened }}</td>


                        


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