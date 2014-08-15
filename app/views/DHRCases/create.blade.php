@extends('DHRCases.master')

@section('title')
@parent
:: Create DHR Cases
@stop

@section('content')

<h1>Create a DHRCases</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script> 
    $(function() {
    $( "#opened" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
  $(function() {
    $( "#closed" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
  
  </script>
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


	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop