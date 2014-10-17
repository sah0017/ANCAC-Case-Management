@extends('MDTReport.report')

@section('title')
@parent
:: MDTSummary
@stop

@section('content')

@foreach($cases as $key => $value)
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
	</tbody>
</table>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Worker</td>
            <td>Type</td>
        </tr>
    </thead>
     <tbody>
   @foreach($value->info->workers as $worker)
        <tr>
            <td>{{ $worker->name }}</td>
            <td>{{ $worker->workerType->type }}</td>
        </tr>
    @endforeach
        
    </tbody>
</table>

<hr>

@endforeach

