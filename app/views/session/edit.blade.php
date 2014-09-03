@extends('session.master')

@section('title')
@parent
:: Edit Session
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $session->name }}</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script> 
    $(function() {
    $( "#date" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
</script>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($session, array('route' => array('session.update', $session->id), 'method' => 'PUT')) }}
<div class="form-inline">
	<div id="pad" class="form-group">
		{{ Form::label('serviceType_id', 'Service Type','autofocus') }}
		{{ Form::select('serviceType_id', ServiceType::where('center_id', Auth::User()->center_id)->orWhere('center_id', 99)->lists('type','id'), Input::old('serviceType_id'), array('class' => 'form-control')) }}
        </div>

        <div id="pad" class="form-group">
		{{ Form::label('date', 'Date') }}
		{{ Form::text('date', Input::old('date'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('timeStart', 'Time Start') }}
		{{ Form::text('timeStart', Input::old('timeStart'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('timeEnd', 'Time End') }}
		{{ Form::text('timeEnd', Input::old('timeEnd'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select a Status', '1' => 'scheduled',
                            '2' => 'no-show', '3' => 'cancled', '4' => 'attended', '5' => 'rescheduled'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('worker_id', 'Interviewer') }}
		{{ Form::select('worker_id', Worker::where('center_id', Auth::User()->center_id)->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('discussedAbuse', 'Discussed Abuse') }}
		{{ Form::select('discussedAbuse', array('0' => 'Select the one that aplies', '1' => 'yes',
                            '2' => 'no', '3' => 'partial'), 
                    Input::old('discussedAbuse'), array('class' => 'form-control')) }}
	</div>

</div>
	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop