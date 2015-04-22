@extends('children.master')

@section('title')
@parent
:: Edit Children
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $child->personalInfo->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
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
                    document.getElementById("address_id").value=1;
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
    $( "#dob" ).datepicker({ changeYear: true , yearRange: "c-60:c+60" , maxDate: "+0d",dateFormat: "mm-dd-yy" });
});
  
</script>


{{ Form::model($child, array('route' => array('children.update', $child->id), 'method' => 'PUT')) }}
<div class="form-inline">
	<div id="pad" class="form-group">
		{{ Form::label('first', 'First Name') }}
		{{ Form::text('first', $child->personalInfo->first, array('class' => 'form-control','autofocus')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('middle', 'Middle Name') }}
		{{ Form::text('middle', $child->personalInfo->middle, array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('last', 'Last Name') }}
		{{ Form::text('last', $child->personalInfo->last, array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('age', 'Age') }}
		{{ Form::text('age', $child->personalInfo->age, array('class' => 'form-control')) }}
	</div>
        
        <div id="pad" class="form-group">
		{{ Form::label('dob', 'Date of Birth (MM-DD-YYYY)') }}
		{{ Form::text('dob',$child->personalInfo->dob, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('gender', 'Gender') }}
		{{ Form::select('gender', array('male' => 'Male',
                            'female' => 'Female'), 
                    Input::old('gender'), array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('ethnicity_id', 'Ethnicity') }}
		{{ Form::select('ethnicity_id', Ethnicity::all()->lists('ethnicity','id'), Input::old('ethnicity_id'), array('class' => 'form-control')) }}
	</div>
    
        <div id="pad" class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', $child->personalInfo->language, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('originCountry', 'Country Origin') }}
		{{ Form::select('originCountry', CountryOrigin::all()->lists('name','id'), $child->personalInfo->originCountry,array('class' => 'form-control')) }}
        </div>
    
        <div id="pad" class="form-group">
		{{ Form::label('school', 'School') }}
		{{ Form::select('school', School::where('center_id', Auth::User()->center_id)->orWhere('center_id', 99)->lists('name','id'),Input::old('school'), array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('schoolGrade', 'School Grade') }}
		{{ Form::text('schoolGrade', Input::old('schoolGrade'), array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('specialNeeds', 'Special Needs') }}
		{{ Form::text('specialNeeds', $child->personalInfo->specialNeeds, array('class' => 'form-control')) }}
	</div>
    
        <div id="pad" class="form-group">
            
		{{ Form::label('phone', 'Home Phone ') }}
		{{ Form::text('phone', $child->personalInfo->address->phone, array('class' => 'form-control')) }}

	</div>
    
	<div id="pad" class="form-group">
		{{ Form::label('parentalHistory', 'Parental History') }}
		{{ Form::text('parentalHistory', Input::old('parentalHistory'), array('class' => 'form-control')) }}
	</div>

	<div id="pad" class="form-group">
		{{ Form::label('parentStatus', 'Parent Status') }}
		{{ Form::text('parentStatus', Input::old('parentStatus'), array('class' => 'form-control')) }}
	</div>
    
    <br>

        <div id="addresses" class="alert alert-info" role="alert" style="display: none;">
        <!-- For results -->
        </div>

        <button  id="pad" type='button' onclick="clearForm()" class="btn btn-default">Clear Address</button><br>

        {{ Form::hidden('address_id' , 0, array('id' => 'address_id')) }}

        <div id="pad" class="form-group">
		{{ Form::label('address1', 'Address Line 1') }}
		{{ Form::text('address1', $child->personalInfo->address->line1, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('address2', 'Address Line 2') }}
		{{ Form::text('address2', $child->personalInfo->address->line2, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('city', 'City') }}
		{{ Form::text('city', $child->personalInfo->address->city, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('state', 'State') }}
		{{ Form::text('state', $child->personalInfo->address->state, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('zip', 'Zip Code') }}
		{{ Form::text('zip', $child->personalInfo->address->zip, array('class' => 'form-control')) }}
	</div>

        <div id="pad" class="form-group">
		{{ Form::label('county_id', 'County') }}
		{{ Form::select('county_id', County::all()->lists('name','id'), $child->personalInfo->address->county_id, array('class' => 'form-control')) }}
	</div>
        
        <br>
        
	<div id="pad" class="form-group">
		{{ Form::label('medicalLocation', 'Medical Location') }}
		{{ Form::text('medicalLocation', Input::old('medicalLocation'), array('class' => 'form-control')) }}
        </div>
     
</div>

 <div class="form-horizontal">

    <div class="checkbox">
        <label>
            {{ Form::checkbox('medicalCompleted', '1', Input::old('medicalCompleted'))}}
            <b>Is Medical Completed</b>
        </label>
    </div>
        
</div>
        <br>

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop
