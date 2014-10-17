@extends('MDTReport.report')

@section('title')
@parent
:: MDTSummary
@stop

@section('content')

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                <td>Case #</td>
                <td>Alleged Offender Name</td>
                <td>Victim Name</td>
                <td>FI Date</td>
                </tr>
	</thead>
	<tbody>
		@foreach($cases as $key => $value)
                <tr>
                        <td>{{$value->info->caseNumber}}</td>
                        @if($value->info->allegedOffenders->count()==0)
                        <td>N/A</td>
                        @else
                        <td>
                        @foreach($value->info->allegedOffenders as $key => $offender)
                        {{ $offender->personalInfo->name }}
                         @if($value->info->allegedOffenders->count()>1)
                         {{", "}}
                         @endif
                         @endforeach
                        </td>
                        @endif
                        <td>{{ $value->info->abusedChild->personalInfo->name }}</td>
                        @foreach($value->info->sessions as $key => $session)
                            @if($session->serviceType_id == 1)
                                <td>{{$session->date }}</td>
                            @endif
                        @endforeach
		</tr>
                @endforeach
	</tbody>
</table>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Law Enforcement Name</td>
            <td>Law Enforcement Agency</td>
            <td>DHR Name</td>
            <td>DHR Agency</td>
            <td>FI Interviewer Name</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>


