@extends('session.master')

@section('title')
@parent
:: Session
@stop

@section('content')
<style>
article{font-size:21px}
</style>
<h1>Showing {{ $session->name }}</h1>
<a class="btn btn-small btn-success hidden-print" href="..">Back to Session</a>
<a class="btn btn-small btn-success hidden-print" onclick="print()">Print</a>
	<div class="jumbotron text-left">
		<h2>{{ $session->name }}</h2>
                <article>
			<strong>Service Type:</strong> {{ $session->type->type }}<br>
                        <strong>Date:</strong> {{ $session->date }}<br>
                        <strong>Time Start:</strong> {{ $session->timeStart }}<br>
                        <strong>Time End:</strong> {{ $session->timeEnd }}<br>
                        <strong>Status:</strong> {{ $session->status }}<br>
			<strong>Interviewer:</strong> {{ $session->primaryWorker->name }}<br>
                        <strong>Discussed Abuse:</strong> {{ $session->discussedAbuse }}<br>
                        <strong>Notes:</strong><br>
                        @foreach($session->notes as $key => $value)
                        <strong>Worker: </strong>{{$value->worker->name}}
                        <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case . '/child/session/'.$session->id.'/sessionNotes/'. $value->id .'/edit') }}">Edit</a> 
                        {{ Form::open(array('url' => 'sessionNotes/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('X', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}<br>
                        {{$value->note}} <br>
                        @endforeach
                </article>  
              
	</div>
<script>
    
    function print()
    {
        window.print();
    }
    }
</script>

@stop