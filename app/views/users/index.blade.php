@extends('users.master')


@section('title')
@parent
:: Create User
@stop

@section('content')
    
<h1>All the Users</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>User ID</td>
                        @if (Auth::User()->center_id == 99)
                        <td>Center</td>
                        @endif
                        <td>Access</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $value)
		<tr>
			<td>{{ $value->id }}</td>
                        @if (Auth::User()->center_id == 99)
                        <td>{{ $value->center_id }}</td>
                        @endif
                        <td>
                            @if ($value->level == 1)
                                View Only
                            @elseif ($value->level == 2)
                                Normal
                            @elseif ($value->level == 3)
                                Admin
                            @endif
                        </td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>
                                
				<!-- show the user (uses the show method found at GET /user/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this user</a>

                                @if (Auth::User()->level == 3)
				<!-- edit this user (uses the edit method found at GET /user/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this user</a>
                                {{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this user', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
                                @endif
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop