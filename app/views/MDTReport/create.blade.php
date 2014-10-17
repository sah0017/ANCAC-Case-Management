@extends('MDTReport.master')

@section('title')
@parent
:: Create MDTReport
@stop

@section('content')

<h1>MDT Report</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script>
 $(function() {
    $( "#date" ).datepicker({ changeYear: true , yearRange: "c-0:c+60" , maxDate: "+1y",dateFormat: "yy-mm-dd" });
  });
</script>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'MDTReport')) }}
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Select</td>
                        <td>Case #</td>
                        <td>Victim Name</td>
                        
		</tr>
	</thead>
	<tbody>
            
            <div id="pad" class="form-group">
		{{ Form::label('date', 'Date of Meeting (YYYY-MM-DD)') }}
		{{ Form::text('date', Input::old('date'), array('class' => 'form-control')) }}
            </div>
              
            <div id="pad" class="form-group">
		{{ Form::label('location', 'Location') }}
		{{ Form::text('location'," ", array('class' => 'form-control')) }}
            </div>
            
            @foreach($cases as $key => $value)
            
            
                <tr>
                        <td><div class="checkbox">
                        <label>
                        {{ Form::checkbox('case[]', '1') }}
                        </label>
                        </div></td>
                        <td>{{$value->caseNumber}}</td>
                        <td>{{$value->abusedChild->PersonalInfo->name}}</td>                      
		</tr>
                <tr>
                    <td colspan="3">
                        <div id="pad" class="form-group">
		{{ Form::label('recommendation', 'Recommendation') }}
		{{ Form::textarea('recommendation[]'," ",array('class' => 'form-control')) }}
                        </div>
                    </td>
                </tr>
	@endforeach
	</tbody>
</table>
{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
{{Form::close()}}
@stop