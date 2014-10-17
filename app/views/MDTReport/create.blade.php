@extends('MDTReport.master')

@section('title')
@parent
:: Create MDTReport
@stop

@section('content')

<h1>MDT Report</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Select</td>
                        <td>Case #</td>
                        <td>Victim Name</td>
                        
		</tr>
	</thead>
	<tbody><?php $count=0; ?>
            @foreach($cases as $key => $value)
            
                <tr>
                        <td><div class="checkbox">
                        <label>
                        {{ Form::checkbox('case'.$count++, '1') }}
                        </label>
                        </div></td>
                        <td>{{$value->caseNumber}}</td>
                        <td>{{$value->abusedChild->PersonalInfo->name}}</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop