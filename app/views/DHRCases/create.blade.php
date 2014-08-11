@extends('DHRCases.master')

@section('title')
@parent
:: Create DHR Cases
@stop

@section('content')

<h1>Create a DHRCases</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'DHRCases')) }}


        <div class="form-group">
		{{ Form::label('household_id', 'Household') }}
		{{ Form::select('household_id', Household::all()->lists('id','id'),Input::old('household_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('caseNumber', 'Case Number') }}
		{{ Form::select('caseNumber', TrackedCase::all()->lists('id','id'),Input::old('caseNumber'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select Status', '1' => 'Open',
                            '2' => 'Closed'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('type', 'Type') }}
		{{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('opened', 'Case Open Date') }}
		{{ Form::text('opened', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('closed', 'Case Closed Date') }}
		{{ Form::text('closed', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the DHR cases!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>