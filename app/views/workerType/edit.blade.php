@extends('session.master')

@section('title')
@parent
:: Edit Session
@stop

@section('content')

<h1>Edit {{ $workerType->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($workerType, array('route' => array('workerType.update', $workerType->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Edit the worker type!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

