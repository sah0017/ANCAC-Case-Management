@extends('session.master')

@section('title')
@parent
:: Create Session
@stop

@section('content')

<h1>Create a Session</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'session')) }}


	<div class="form-group">
		{{ Form::label('serviceType_id', 'Service Type') }}
		{{ Form::select('serviceType_id', ServiceType::all()->lists('type','id'), Input::old('serviceType_id'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
		{{ Form::label('date', 'Date') }}
		{{ Form::text('date', Input::old('date'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('timeStart', 'Time Start') }}
		{{ Form::text('timeStart', Input::old('timeStart'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('timeEnd', 'Time End') }}
		{{ Form::text('timeEnd', Input::old('timeEnd'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select a Status', '1' => 'scheduled',
                            '2' => 'no-show', '3' => 'cancled', '4' => 'attended', '5' => 'rescheduled'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('worker_id', 'Interviewer') }}
		{{ Form::select('worker_id', Worker::all()->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('discussedAbuse', 'Discussed Abuse') }}
		{{ Form::select('discussedAbuse', array('0' => 'Select the one that aplies', '1' => 'yes',
                            '2' => 'no', '3' => 'partial'), 
                    Input::old('discussedAbuse'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the session entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>