@extends('children.master')

@section('title')
@parent
:: Create Children
@stop

@section('content')

<h1>Create a Child</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}
{{ HTML::script('js/jquery-ui/jquery-ui.js') }}
{{ HTML::style('js/jquery-ui/jquery-ui.css') }}
<script type="text/javascript">
var addresses;
$(document).ready(function(){
    
    $('input#address1').keyup(function() {
        $.ajax({ // ajax call starts
            url: '/address/search', // JQuery loads serverside.php
            type: "POST",
            data: 'line1=' + $(this).val(), // Send value of the text
            dataType: 'json', // Choosing a JSON datatype
            success: function(data) // Variable data contains the data we get from serverside
            {
                addresses = data;
                $('#addresses').html(''); // Clear div
                if (jQuery.isEmptyObject(data)){
                    document.getElementById('addresses').style.display = 'none';
                }
                else{
                    document.getElementById('addresses').style.display = 'block';
                    results = '<strong>Possible Matches:</strong><br/><table class="table" width=100%>'+
                        '<colgroup>'+
                        '<col class="col-xs-1">'+
                        '<col class="col-xs-7">'+
                        '</colgroup>';
                    for (var i in data) {
                        results += '<tr><td>'+data[i].line1 + '<br>' + data[i].line2 + data[i].city+'</td>';
                        results += '<td><button value='+i+' type="button" onclick="use('+i+')" class="btn btn-default">Use</button></td></tr>';
                    }
                    $('#addresses').append(results+'</table>');
                }
            }
        });
        return false; // keeps the page from not refreshing 
    });
});

function use(i) {
        document.getElementById('addresses').style.display = 'none'
        document.getElementById("address_id").value=addresses[i].id;
        document.getElementById("address1").value=addresses[i].line1;
        document.getElementById("address1").disabled=true;
        document.getElementById("address2").value=addresses[i].line2;
        document.getElementById("address2").disabled=true;
        document.getElementById("city").value=addresses[i].city;
        document.getElementById("city").disabled=true;
        document.getElementById("state").value=addresses[i].state;
        document.getElementById("state").disabled=true
        document.getElementById("zip").value=addresses[i].zip;
        document.getElementById("zip").disabled=true;
        document.getElementById("county_id").value=addresses[i].county_id;
        document.getElementById("county_id").disabled=true;
        document.getElementById("phone").value=addresses[i].phone;
        document.getElementById("phone").disabled=true;
        
    }
function clearForm(){
        document.getElementById("address_id").value=1;
        document.getElementById("address1").value='unknown';
        document.getElementById("address1").disabled=false;
        document.getElementById("address2").value='';
        document.getElementById("address2").disabled=false;
        document.getElementById("city").value='';
        document.getElementById("city").disabled=false;
        document.getElementById("state").value='';
        document.getElementById("state").disabled=false
        document.getElementById("zip").value='';
        document.getElementById("zip").disabled=false;
        document.getElementById("county_id").value=0;
        document.getElementById("county_id").disabled=false;
        document.getElementById("phone").value='';
        document.getElementById("phone").disabled=false;
    }

$(function() {
    $( "#dob" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "yy-mm-dd" });
});
  
</script>

{{ Form::open(array('url' => 'children')) }}


	<div class="form-group">
		{{ Form::label('first', 'First Name') }}
		{{ Form::text('first', Input::old('first'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('middle', 'Middle Name') }}
		{{ Form::text('middle', Input::old('middle'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('last', 'Last Name') }}
		{{ Form::text('last', Input::old('last'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('age', 'Age') }}
		{{ Form::text('age', Input::old('age'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('dob', 'Date of Birth (YYYY-MM-DD)') }}
		{{ Form::text('dob', Input::old('dob'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('parentalHistory', 'Parental History') }}
		{{ Form::text('parentalHistory', Input::old('parentalHistory'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('parentStatus', 'Parent Status') }}
		{{ Form::text('parentStatus', Input::old('parentStatus'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('medicalCompleted', 'Is Medical Completed') }}
		{{ Form::checkbox('medicalCompleted', '1', Input::old('medicalCompleted'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('medicalLocation', 'Medical Location') }}
		{{ Form::text('medicalLocation', Input::old('medicalLocation'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('schoolGrade', 'school Grade') }}
		{{ Form::text('schoolGrade', Input::old('schoolGrade'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('school', 'School') }}
		{{ Form::text('school', Input::old('school'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('specialNeeds', 'Special Needs') }}
		{{ Form::text('specialNeeds', Input::old('specialNeeds'), array('class' => 'form-control')) }}
	</div>


        <div class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', Input::old('language'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('originCountry', 'Origin Country') }}
		{{ Form::text('originCountry', Input::old('originCountry'), array('class' => 'form-control')) }}
        </div>

         
        <div class="form-group">
            
		{{ Form::label('phone', 'Home Phone ') }}
		{{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}

	</div>

<div id="addresses" class="alert alert-info" role="alert" style="display: none;">
    <!-- For results -->
</div>
<button  type='button' onclick="clearForm()" class="btn btn-default">Clear Address</button><br>

        {{ Form::hidden('address_id' , 1, array('id' => 'address_id')) }}

        <div class="form-group">
		{{ Form::label('address1', 'Address Line 1') }}
		{{ Form::text('address1', Input::old('address1'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('address2', 'Address Line 2') }}
		{{ Form::text('address2', Input::old('address2'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('zip', 'Zip Code') }}
		{{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), Input::old('county_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('ethnicity_id', 'Ethnicity') }}
		{{ Form::select('ethnicity_id', Ethnicity::all()->lists('ethnicity','id'), Input::old('ethnicity_id'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the Child Entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop