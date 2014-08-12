@extends('cases.master')

@section('title')
@parent
:: Edit Case
@stop

@section('content')

<h1>Edit {{ $case->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($case, array('route' => array('cases.update', $case->id), 'method' => 'PUT')) }}

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

        <div class="form-group">
		{{ Form::label('childAge', 'Child\'s Age') }}
		{{ Form::text('childFirst', Input::old('childFirst'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('worker_id', 'MDT Workers') }}
		{{ Form::select('worker_id', Worker::all()->lists('name','id'), Input::old('worker_id'), array('class' => 'form-control')) }}
	</div>
	
        <div class="form-group">
		{{ Form::label('note', 'Note') }}
		{{ Form::text('note', Input::old('note'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('caseOpened', 'Case Opened') }}
		{{ Form::text('caseOpened', date('Y-m-d'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('custodyIssues', 'Are there custody issues?') }}
		{{ Form::checkbox('custodyIssues', '1', Input::old('custodyIssues'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('IOReport', 'Incident Offense Rpt') }}
		{{ Form::checkbox('IOReport', '1', Input::old('IOReport'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('domesticViolence', 'Is There Domestic Violence') }}
		{{ Form::checkbox('domesticViolence', '1', Input::old('domesticViolence'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('prosecution', 'Was DV Prosecuted') }}
		{{ Form::checkbox('prosecution', '1', Input::old('prosecution'), array('class' => 'form-control')) }}
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
		{{ Form::label('forensicEvaluation', 'Extended Forensic Interview') }}
		{{ Form::checkbox('forensicEvaluation', '1', Input::old('forensicEvaluation'), array('class' => 'form-control')) }}
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
		{{ Form::label('talkedToChild', 'Who has the child spoken with regarding the abused.') }}
		{{ Form::text('talkedToChild', Input::old('talkedToChild'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('reportedDate', 'Reported Date') }}
		{{ Form::text('reportedDate', Input::old('reportedDate'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Case!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop