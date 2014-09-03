@extends('relatives.master')

@section('title')
@parent
:: Create Relative
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>
<h1>Create a Relation</h1>
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script>
 $(function() {
    $( "#dob" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "mm-dd-yy" });
  });
</script>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

<div id="people" class="alert alert-info" role="alert" style="display: none;">
    <!-- For results -->
</div>
<script type="text/javascript">
var people;
$(document).ready(function(){
    
    $('input#first').keyup(function() {
        search();
        searchOutside();
        return false; // keeps the page from not refreshing 
    });
    $('input#last').keyup(function() {
        search();
        searchOutside();
        return false; // keeps the page from not refreshing 
    });
});

function search() {
    $.ajax({// ajax call starts
        url: '/people/search', // JQuery loads serverside.php
        type: "POST",
        data: {first: $(first).val(),middle: $(middle).val(),last: $(last).val()}, // Send value of the text
        dataType: 'json', // Choosing a JSON datatype
        success: function(data) // Variable data contains the data we get from serverside
        {
            people = data;
            $('#people').html(''); // Clear div
            if (jQuery.isEmptyObject(data)){
                document.getElementById('people').style.display = 'none';
            }
            else{
                document.getElementById('people').style.display = 'block';
                results = '<strong>Possible Matches:</strong><br/><table class="table" width=100%>'+
                    '<colgroup>'+
                    '<col class="col-xs-1">'+
                    '<col class="col-xs-7">'+
                    '</colgroup>';
                for (var i in data) {
                    results += '<tr><td>'+data[i].first + ' ' + data[i].last+'</td>';
                    results += '<td><button value='+i+' type="button" onclick="use('+i+')" class="btn btn-default">Use</button></td></tr>';
                }
                $('#people').append(results+'</table>');
            }
        }
    })
}
function searchOutside() { 
    $.ajax({// ajax call starts
        url: '/people/searchOutside', // JQuery loads serverside.php
        type: "POST",
        data: {first: $(first).val(),middle: $(middle).val(),last: $(last).val()}, // Send value of the text
        dataType: 'json', // Choosing a JSON datatype
        success: function(data) // Variable data contains the data we get from serverside
        {
            people = data;
            $('#outside').html(''); // Clear div
            if (jQuery.isEmptyObject(data)){
                document.getElementById('outside').style.display = 'none';
            }
            else{
                document.getElementById('outside').style.display = 'block';
                $('#outside').append(data.result);
            }
        }
    })
}

function use(i) {
        document.getElementById('people').style.display = 'none'
        document.getElementById("person_id").value=people[i].id;
        document.getElementById("first").value=people[i].first;
        document.getElementById("first").disabled=true;
        document.getElementById("middle").value=people[i].middle;
        document.getElementById("middle").disabled=true;
        document.getElementById("last").value=people[i].last;
        document.getElementById("last").disabled=true;
        document.getElementById("dob").value=people[i].dob;
        document.getElementById("dob").disabled=true
        document.getElementById("age").value=people[i].age;
        document.getElementById("age").disabled=true;
        
    }
function clearForm(){
    document.getElementById("first").disabled=false;
    document.getElementById("middle").disabled=false;
    document.getElementById("last").disabled=false;
    document.getElementById("dob").disabled=false;
    document.getElementById("age").disabled=false;
    document.getElementById("form").reset();
    document.getElementById("person_id").value=0;
    }
</script>
<button onclick="clearForm()" class="btn btn-default">Clear Form</button><br>


{{ Form::open(array('url' => 'relatives', 'id' => 'form')) }}
<div class="form-inline"> 
        @if (intval($id) > 0)
           {{ Form::hidden('abusedChild_id',$id,array('id' => 'abusedChild_id')) }}
        @else
           <div class="form-group">
		{{ Form::label('abusedChild_id', 'Abused Child') }}
		{{ Form::select('abusedChild_id', AbusedChild::where('center_id', Auth::User()->center_id)->lists('id','id'),Input::old('abusedChild_id'), array('class' => 'form-control')) }}
	</div>
        @endif
	
       
        <div id="pad" class="form-group">
		{{ Form::hidden('person_id' , 0, array('id' => 'person_id')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('first', 'First Name') }}
		{{ Form::text('first', Input::old('first'), array('class' => 'form-control','autofocus')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('middle', 'Middle Name') }}
		{{ Form::text('middle', Input::old('middle'), array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('last', 'Last Name') }}
		{{ Form::text('last', Input::old('last'), array('class' => 'form-control')) }}
	</div>
        
	<div id="pad" class="form-group">
		{{ Form::label('alias', 'Nickname of the person.') }}
		{{ Form::text('alias', Input::old('alias'), array('class' => 'form-control')) }}
	</div>
        
	<div id="pad" class="form-group">
		{{ Form::label('age', 'Age') }}
		{{ Form::text('age', Input::old('age'), array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('dob', 'Date of Birth (YYYY-MM-DD)') }}
		{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('gender', 'Gender') }}
		{{ Form::select('gender', array('0' => 'Male', '1' => 'Female',), 
                    Input::old('gender'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('relationType_id', 'Relation Type') }}
		{{ Form::select('relationType_id', RelationType::where('center_id', Auth::User()->center_id)->orWhere('center_id', 99)->lists('type','id'), Input::old('relationType_id'), array('class' => 'form-control')) }}
	</div>
</div>

<div class="form-horizontal">
    <div class="checkbox">
        <label>


            {{ Form::checkbox('custodian','1', Input::old('custodian')) }}
            <b>Is He/She the Custodion of the Child</b>
        </label>
    </div> 
    
 
    <div class="checkbox">
        <label>


            {{ Form::checkbox('sameHouse', '1', Input::old('sameHouse')) }}
            <b>Do they belong to the same house?</b>
        </label>
    </div> 
        
        @if( isset($case_id) )
 
    <div class="checkbox">
        <label>


            {{ Form::checkbox('allegedOffender', '1', Input::old('allegedOffender')) }}
            <b>Is this person an alleged offender in this case?</b>
             {{ Form::hidden('case_id', $case_id) }}
             {{ Form::hidden('county_id', $county_id) }}
        </label> 
    </div> 	
         @endif
        
</div>
<br>

	{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop

