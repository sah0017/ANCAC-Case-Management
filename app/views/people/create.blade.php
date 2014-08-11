<!-- app/views/people/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>ANCAC People</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        {{ HTML::script('js/jquery.min.js') }}

</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('people') }}">Person Entries</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('people') }}">View All People</a></li>
		<li><a href="{{ URL::to('people/create') }}">Create a Person Entry</a>
	</ul>
</nav>

<h1>Create a Person</h1>

<div id="people">
    <!-- For results -->
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('input#last').keyup(function() {
        $.ajax({ // ajax call starts
            url: 'search', // JQuery loads serverside.php
            type: "POST",
            data: 'last=' + $(this).val(), // Send value of the text
            dataType: 'json', // Choosing a JSON datatype
            success: function(data) // Variable data contains the data we get from serverside
            {
                $('#people').html(''); // Clear div

                    for (var i in data) {
                        $('#people').append(data[i].first + ' ' + data[i].last + '<br/>');
                    }
            }
        })
    });
    return false; // keeps the page from not refreshing 
});
</script>



<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'people')) }}

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
		{{ Form::label('drugUse', 'History of Drug Use') }}
		{{ Form::checkbox('drugUse', '1', Input::old('drugUse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('physicalAbuse', 'History of Physical Abuse') }}
		{{ Form::checkbox('physicalAbuse', '1', Input::old('physicalAbuse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuse', 'History of Sexual Abuse') }}
		{{ Form::checkbox('sexAbuse', '1', Input::old('sexAbuse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('mentalHealthTreatment', 'Has had Mental Health Treatment') }}
		{{ Form::checkbox('mentalHealthTreatment', '1', Input::old('mentalHealthTreatmet'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('crimeConviction', 'Has been Convicted of a Crime') }}
		{{ Form::checkbox('cromeConviction', '1', Input::old('crimeConviction'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('employed', 'Is Employed') }}
		{{ Form::checkbox('employed', '1', Input::old('employed'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('fullTime', 'Full-time Employment') }}
		{{ Form::checkbox('fullTime', '1', Input::old('fullTime'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('activeMilitary', 'Is Active Military') }}
		{{ Form::checkbox('activeMilitary', '1', Input::old('activeMilitary'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sexAbuseSurvivor', 'Is a Sexual Abuse Survivor') }}
		{{ Form::checkbox('sexAbuseSurvivor', '1', Input::old('sexAbuseSurvivor'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('specialNeeds', 'Has Special Needs') }}
		{{ Form::text('specialNeeds', Input::old('specialNeeds'), array('class' => 'form-control')) }}
	</div>

        
        <div class="form-group">
		{{ Form::label('language', 'Language') }}
		{{ Form::text('language', Input::old('language'), array('class' => 'form-control')) }}
	</div>
        
        
        <div class="form-group">
		{{ Form::label('maritalStatus', 'Marital Status') }}
		{{ Form::select('maritalStatus', array(
                            'married' => 'married',
                            'single' => 'Single',
                            'divorced' => 'Divorced'),
                            Input::old('maritalStatus'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('originCountry', 'Origin Country') }}
		{{ Form::text('originCountry', Input::old('originCountry'), array('class' => 'form-control')) }}
        </div>

       <div class="form-group">
		{{ Form::label('address_id', 'Address') }}
		{{ Form::select('address_id', Address::all()->lists('adress','id'), Input::old('address_id'), array('class' => 'form-control')) }}
	</div>
        
        <div class="form-group">
		{{ Form::label('household_id', 'Household') }}
		{{ Form::select('household_id', Household::all()->lists('household','id'), Input::old('household_id'), array('class' => 'form-control')) }}
	</div>

        <div class="form-group">
		{{ Form::label('ethnicity_id', 'Ethnicity') }}
		{{ Form::select('ethnicity_id', Ethnicity::all()->lists('ethnicity','id'), Input::old('ethnicity_id'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the person entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>