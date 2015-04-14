@extends('cases.master')

@section('title')
@parent
:: Case
@stop

@section('content')

<h1>All the Cases</h1>
<script>

    $(function() {
    $( "#frmDate" ).datepicker({ changeYear: true , yearRange: "c-0:c+60" , maxDate: "+1y",dateFormat: "yy-mm-dd" });
    });
    $(function() {
    $( "#toDate" ).datepicker({ changeYear: true , yearRange: "c-0:c+60" , maxDate: "+1y",dateFormat: "yy-mm-dd" });
    });
    
   
        $('#select-all').click(function(){
            $('container input[type="chekbox"]').prop('checked',this.checked);
        });
  
    
</script>
{{ HTML::ul($errors->all()) }}
    {{ Form::open(array('url' =>'CasesFtr', 'method'=>'get'))}}
    <div class="form-group">
        {{Form::label('allOpen','Open Cases Only')}}
        {{Form::checkbox('selOpnCases',true)}}
        {{Form::label('frmDate','From Date:')}}
        {{Form::text('frmDate')}}
        {{Form::label('toDate','To Date:')}}
        {{Form::text('toDate', date('Y-m-d'))}}
        
    </div>
    {{Form::submit('apply',array('class' =>'btn btn-small'))}}
    {{Form::close()}}
    

{{ Form::open(array('url' => 'cases')) }}

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                <td>Number</td>
                <td>Abused Child</td>
                <td>Case Opened</td>
                </tr>
	</thead>
	<tbody>
	@foreach($case as $key => $value)
		<tr>
                        <td>{{ $value->caseNumber }}</td>
                        <td>{{ $value->abusedChild->personalInfo->name }}</td>
                        <td>{{ $value->caseOpened }}</td>


                        


			<!-- we will also add Case Details button -->
			<td>
				
				<!-- show the cases (uses the show method found at GET /case/{id} -->
                                &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('cases/' . $value->id) }}">Case Details</a>

				<!-- edit this cases (uses the edit method found at GET /case/{id}/edit -->
				

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop