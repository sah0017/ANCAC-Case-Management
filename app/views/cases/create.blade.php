@extends('cases.master')

@section('title')
@parent
:: Create Case
@stop

@section('content')


<h1>Create a Case Details</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script> 
    $(function() {
    $( "#caseOpened" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
  $(function() {
    $( "#abuseDate" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
  $(function() {
    $( "#reportedDate" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
  });
  
 </script>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'cases')) }}

<div class="form-inline">
    <div class="col-md-12">
        <div class="form-group">
		{{ Form::label('caseNumber', 'Case Number') }}
		{{ Form::text('caseNumber', Input::old('caseNumber'), array('class' => 'form-control')) }}
	</div>
    
        <div class="form-group">
		{{ Form::label('caseOpened', 'Case Opened') }}
		{{ Form::text('caseOpened', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>
    </div>

    <br>
   
    <div class="col-md-12">
        <div class="form-group">
		{{ Form::label('childFirst', 'Child\'s First Name') }}
		{{ Form::text('childFirst', Input::old('childFirst'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('childMiddle', 'Middle Name') }}
		{{ Form::text('childMiddle', Input::old('childMiddle'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('childLast', 'Last Name') }}
		{{ Form::text('childLast', Input::old('childLast'), array('class' => 'form-control')) }}
	</div>
    </div>

    <br>
    
    <div class="col-md-12">
        <div class="form-group">
		{{ Form::label('childAge', 'Child\'s Age') }}
		{{ Form::text('childAge', Input::old('childAge'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('gender', 'Gender') }}
		{{ Form::select('gender', array('0' => 'Male', '1' => 'Female',), 
                    Input::old('gender'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>
    
        <div class="form-group">
		{{ Form::label('worker_id', 'Workers') }}
		{{ Form::select('worker_id', Worker::all()->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>
    </div>
    
        <div class="form-group">
		{{ Form::label('note', 'Note') }}
		{{ Form::text('note', Input::old('note'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('reporter', 'Reporter') }}
		{{ Form::text('reporter', Input::old('reporter'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('abuseDate', 'Abuse Date') }}
		{{ Form::text('abuseDate', Input::old('abuseDate'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('abuseLocation', 'Abuse Location') }}
		{{ Form::text('abuseLocation', Input::old('abuseLocation'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('referralReason', 'Reason for Referral') }}
		{{ Form::text('referralReason', Input::old('referralReason'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('DHRDetermination', 'DHR Determination') }}
		{{ Form::select('DHRDetermination', array('0' => 'Select a Determination', '1' => 'Indicated',
                            '2' => 'Not Indicated', '3' => 'Unknown'), 
                    Input::old('DHRDetermination'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select Status', '1' => 'Open',
                            '2' => 'Closed'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('chargesFiled', 'Charges Filed') }}
		{{ Form::text('chargesFiled', Input::old('chargesFiled'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('agencyReportedTo', 'Reporting Agency') }}
		{{ Form::text('agencyReportedTo', Input::old('agencyReportedTo'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('talkedToChild', 'Who has the child spoken with regarding the abuses.') }}
		{{ Form::text('talkedToChild', Input::old('talkedToChild'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('reportedDate', 'Reported Date') }}
		{{ Form::text('reportedDate', Input::old('reportedDate'), array('class' => 'form-control')) }}
	</div>
</div>
<div class="form-horizontal">
<div class="checkbox">
    <label>
        
           
            {{ Form::checkbox('custodyIssues', '1', Input::old('custodyIssues')) }}
            <b>Are there custody issues?</b>
    </label>
</div> 
<div class="checkbox">
    <label>
       
            
            {{ Form::checkbox('IOReport', '1', Input::old('IOReport')) }}
            <b>Incident Offense Rpt</b>
    </label>
</div>

<div class="checkbox">
    <label>
        
            
            {{ Form::checkbox('domesticViolence', '1', Input::old('domesticViolence')) }}
            <b>Is There Domestic Violence?</b>
    </label>
</div>  



<div class="checkbox"> 
    <label>
        
            
            {{ Form::checkbox('prosecution', '1', Input::old('prosecution')) }}
            <b>Was DV Prosecuted</b>
    </label>
</div>



<div class="checkbox">
    <label>
        
            
            {{ Form::checkbox('forensicEvaluation', '1', Input::old('forensicEvaluation')) }}
            <b>Extended Forensic Interview</b>
    </label>
</div>
</div>


<br>
        {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
    
{{ Form::close() }}



@stop