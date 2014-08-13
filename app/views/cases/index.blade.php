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
                <td>ID</td>
                <td>Abused Child ID</td>
                <td>Alleged Abuser ID</td>
                <td>Case Opened</td>
                </tr>
	</thead>
	<tbody>
	@foreach($case as $key => $value)
		<tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->abusedChild_id }}</td>
                        <td>{{ $value->allegedAbuser_id }}</td>
                        <td>{{ $value->caseOpened }}</td>


                        


			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the cases (uses the destroy method DESTROY /case/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
                                <a{{ Form::open(array('url' => 'cases/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Case', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}</a>
                                
				<!-- show the cases (uses the show method found at GET /case/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('cases/' . $value->id) }}">Case Details</a>

				<!-- edit this cases (uses the edit method found at GET /case/{id}/edit -->
				

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop