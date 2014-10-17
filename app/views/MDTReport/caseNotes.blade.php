@extends('MDTReport.report')

@section('title')
@parent
:: Case Notes Summary
@stop

@section('content')

@foreach($meeting->cases as $key => $case)

<h1>Case Notes Summary</h1>
insert meeting info here<br>
<hr>
<div class="container">


        <h3> Case {{ $case->info->caseNumber }} <small>{{ $case->info->abusedChild->personalInfo->name }}</small></h3>
        <div class="row">
            <div class="col-sm-4">
                <h4>Child info:</h4>
                <dl class="dl-horizontal">
                    <dt>DOB:</dt> <dd>{{ $case->info->abusedChild->personalInfo->dob }}</dd>
                    <dt>Age:</dt> <dd>{{ $case->info->abusedChild->personalInfo->age }}</dd>
                    <dt>Gender:</dt> <dd>{{ $case->info->abusedChild->personalInfo->gender }}</dd>
                </dl>
            </div>
            <div class="col-sm-5">
                <h4>Alleged Offender(s):</h4>
                <dl class="dl-horizontal">
                @foreach($case->info->allegedOffenders as $key => $ao)
                    {{ $ao->personalInfo->name }}:<br>
                    <dt>Relation to victim:</dt>
                    <dd>{{ Relationship::where('person_id',$ao->personalInfo->id)->where('abusedChild_id',$case->info->abusedChild_id)->first()->relationType->type }}</dd>
                @endforeach
                </dl>
            </div>        
        </div>
        <h4>Session notes:</h4>
            @foreach($case->info->sessions as $key => $session)
            {{ $session->type->type }} {{ $session->date }}:<br>
                @foreach($session->notes as $key => $note)
                <p class="note">{{ nl2br($note->note) }}</p>
                @endforeach
            @endforeach
</div>
<hr>
@endforeach

@stop