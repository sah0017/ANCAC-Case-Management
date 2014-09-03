@extends('relatives.master')

@section('title')
@parent
:: Relative
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>
<h1>Edit {{ $relative->personalInfo->name }}'s relation to {{ $relative->child->personalInfo->name }}</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script>
 $(function() {
    $( "#dob" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "mm-dd-yy" });
  });
</script>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}



{{ Form::model($relative, array('route' => array('relatives.update', $relative->id), 'method' => 'PUT')) }}
<div class="form-inline"> 

        <div class="form-group">
		{{ Form::label('gender', 'Gender') }}
		{{ Form::select('gender', array('0' => 'Male', '1' => 'Female',), 
                    Input::old('gender'), array('class' => 'form-control')) }}
	</div>
         <div class="form-group">
		{{ Form::label('relationType_id', 'Relation Type') }}
		{{ Form::select('relationType_id', RelationType::where('center_id', Auth::User()->center_id)->orWhere('center_id', 99)->lists('type','id'), Input::old('relationType_id'), array('class' => 'form-control')) }}
	</div>
		<div class="form-group">
		{{ Form::label('alias', 'Nickname of the person.') }}
		{{ Form::text('alias', Input::old('alias'), array('class' => 'form-control')) }}
	</div>
</div>
<br>
<div class="form-horizontal">
    <div class="checkbox">
        <label>


            {{ Form::checkbox('custodian','1', Input::old('custodian')) }}
            <b>Is He/She the Custodion of the Child</b>
        </label>
    </div> 
    
 
    <div class="checkbox">
        <label>


            {{ Form::checkbox('sameHouse', '1', Input::old('sameHouse')) }}
            <b>Do they belong to the same house?</b>
        </label>
    </div> 
        
</div>
<br>

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop
