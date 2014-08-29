@extends('households.master')

@section('title')
@parent
:: Edit Household
@stop

@section('content')

<style>
    #pad{padding: 8px}
</style>

<h1>Edit {{ $household->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($household, array('route' => array('households.update', $household->id), 'method' => 'PUT')) }}
<div class="form-inline">
	<div id="pad" class="form-group">
		{{ Form::label('pets', 'Pets') }}
		{{ Form::text('pets', Input::old('pets'), array('class' => 'form-control')) }}
	</div>
</div>
<div class="form-horizontal">

    <div class="checkbox">
        <label>
		
		{{ Form::checkbox('medicare', '1', Input::old('medicare')) }}
                <b>Medicare</b>
           
        </label>
    </div>
    
    <div class="checkbox">
        <label>
	
		{{ Form::checkbox('allKids', '1', Input::old('allKids')) }}
                <b>All Kids</b>
                
        </label>
    </div>
    
    <div class="checkbox">
        <label>
	
		{{ Form::checkbox('freeOrReducedLunch', '1', Input::old('freeOrReducedLunch')) }}
                <b>Free or Reduced Lunch</b>
        </label>	
    </div>

    <div class="checkbox">
        <label>
		
		{{ Form::checkbox('onBase', '1', Input::old('onBase')) }}
                <b>On Base</b>
    
        </label>
    </div>
            
</div>
	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop