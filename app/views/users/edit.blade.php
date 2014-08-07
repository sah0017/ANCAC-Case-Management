@extends('users.master')


@section('title')
@parent
:: Create User
@stop

@section('content')

<h1>Edit {{ $user->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}


	<div class="form-group">
		{{ Form::label('id', 'User Id') }}
		{{ Form::text('id', Input::old('id'), array('class' => 'form-control')) }}
	</div>
        <div class="form-group">
		{{ Form::label('fullname', 'Full Name') }}
		{{ Form::text('fullname', Input::old('fullname'), array('class' => 'form-control')) }}
	</div>
        <div class="form-group">
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

        @if (Auth::User()->center_id == 99)
            <div class="form-group">
                    {{ Form::label('center_id', 'center_id') }}
                    {{ Form::text('center_id', Input::old('center_id'), array('class' => 'form-control')) }}
            </div>
        @else
            {{ Form::hidden('center_id', Auth::User()->center_id) }}
        @endif

        <div class="form-group">
		{{ Form::label('level', 'Access Level') }}
                @if (Auth::User()->center_id == 99)
                    {{ Form::select('level', array(1 => 'View Only', 2 => 'Normal User', 3 => 'Admin'), Input::old('fullname'), array('class' => 'form-control')) }}
                @else
                    {{ Form::select('level', array(1 => 'View Only', 2 => 'Normal User'), Input::old('fullname'), array('class' => 'form-control')) }}
                @endif
	</div>
        <div class="form-group">
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Submit Edit!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop