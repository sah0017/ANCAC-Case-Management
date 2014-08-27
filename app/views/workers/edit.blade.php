@extends('workers.master')

@section('title')
@parent
:: Edit Worker
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>
    
    <h1>Edit {{ $worker->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::model($worker, array('route' => array('workers.update', $worker->id), 'method' => 'PUT')) }}

<div class="form-inline">
	<div id="pad" class="form-group">
		{{ Form::label('name', 'Name of the Worker') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('workerType_id', 'Worker Type') }}
		{{ Form::select('workerType_id', WorkerType::all()->lists('type','id'), Input::old('workerType_id'), array('class' => 'form-control')) }}
	</div>
</div>

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop