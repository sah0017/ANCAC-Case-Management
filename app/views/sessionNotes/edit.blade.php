@extends('sessionNotes.master')

@section('title')
@parent
:: Edit Session Notes
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $sessionNotes->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($sessionNotes, array('route' => array('sessionNotes.update', $sessionNotes->id), 'method' => 'PUT')) }}

<div class="form-inline">
	<div id="pad" >
		{{ Form::label('note', 'Note') }}
                <br>
		{{ Form::textarea('note', Input::old('note'), array('class' => 'form-control','autofocus')) }}
	</div>

        <div class="form-group">
		{{ Form::label('worker_id', 'Worker') }}
		{{ Form::select('worker_id', Worker::Where('center_id',Auth::User()->center_id)->lists('name','id'), Auth::User()->worker_id, array('class' => 'form-control')) }}
	</div>

        
</div>

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop