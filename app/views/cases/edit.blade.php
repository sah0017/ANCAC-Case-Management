@extends('cases.master')

@section('title')
@parent
:: Edit Case
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>
<h1>Edit Case: {{ $case->caseNumber }}</h1>
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

{{ Form::model($case, array('route' => array('cases.update', $case->id), 'method' => 'PUT')) }}

<div class="form-inline">
    
    
        <div id="pad" class="form-group">
		{{ Form::label('caseOpened', 'Case Opened') }}
		{{ Form::text('caseOpened', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>
    <br>
    
        <div id="pad" class="form-group">
		{{ Form::label('childFirst', 'Child\'s First Name') }}
		{{ Form::text('childFirst', $case->abusedChild->personalInfo->first, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('childMiddle', 'Middle Name') }}
		{{ Form::text('childMiddle', $case->abusedChild->personalInfo->middle, array('class' => 'form-control')) }}
	</div>
    
        <div id="pad" class="form-group">
		{{ Form::label('childLast', 'Last Name') }}
		{{ Form::text('childLast', $case->abusedChild->personalInfo->last, array('class' => 'form-control')) }}
	</div>
    
        <div id="pad" class="form-group">
		{{ Form::label('childAge', 'Child\'s Age') }}
		{{ Form::text('childAge', $case->abusedChild->personalInfo->age, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('gender', 'Gender') }}
		{{ Form::select('gender', array('0' => 'Male', '1' => 'Female',), 
                    Input::old('gender'), array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('worker_id', 'Workers') }}
		{{ Form::select('worker_id', Worker::where('center_id', Auth::User()->center_id)->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>
    
   
        <div id="pad" class="form-group">
		{{ Form::label('referralReason', 'Reason for Referral') }}
		{{ Form::text('referralReason', Input::old('referralReason'), array('class' => 'form-control')) }}
	</div>
        
         <div id="pad" class="form-group">
		{{ Form::label('agencyReportedTo', 'Reporting Agency') }}
		{{ Form::text('agencyReportedTo', Input::old('agencyReportedTo'), array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('reportedDate', 'Reported Date') }}
		{{ Form::text('reportedDate', Input::old('reportedDate'), array('class' => 'form-control')) }}
	</div>
    

        <div id="pad" class="form-group">
		{{ Form::label('reporter', 'Reporter') }}
		{{ Form::text('reporter', Input::old('reporter'), array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('abuseDate', 'Abuse Date') }}
		{{ Form::text('abuseDate', Input::old('abuseDate'), array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('abuseLocation', 'Abuse Location') }}
		{{ Form::text('abuseLocation', Input::old('abuseLocation'), array('class' => 'form-control')) }}
	</div>

    
        <div id="pad" class="form-group">
		{{ Form::label('DHRDetermination', 'DHR Determination') }}
		{{ Form::select('DHRDetermination', array('0' => 'Select a Determination', '1' => 'Indicated',
                            '2' => 'Not Indicated', '3' => 'Unknown'), 
                    Input::old('DHRDetermination'), array('class' => 'form-control')) }}
	</div> 
        
        <div id="pad" class="form-group">
		{{ Form::label('chargesFiled', 'Charges Filed') }}
		{{ Form::text('chargesFiled', Input::old('chargesFiled'), array('class' => 'form-control')) }}
        </div>
        
        <div id="pad" class="form-group">
		{{ Form::label('status', 'Status') }}
		{{ Form::select('status', array('0' => 'Select Status', '1' => 'Open',
                            '2' => 'Closed'), 
                    Input::old('status'), array('class' => 'form-control')) }}
	</div>

    <br>
    <div id="pad" class="col-md-6">
        <div>
		{{ Form::label('talkedToChild', 'Who has the child spoken with regarding the abuses.') }}
                <br>
		{{ Form::textarea('talkedToChild', Input::old('talkedToChild'), array('class' => 'form-control')) }}
	</div>
    </div>
    
    <div id="pad" class="col-md-6">
        <div>
		{{ Form::label('note', 'Note') }}
                <br>
		{{ Form::textarea('note', Input::old('note'), array('class' => 'form-control')) }}
	</div>
    </div>
</div>
<br>
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

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop