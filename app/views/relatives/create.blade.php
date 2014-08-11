@extends('relatives.master')

@section('title')
@parent
:: Create Relative
@stop

@section('content')

<h1>Create a Relation</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'relatives')) }}

        @if (intval($id) > 0)
           {{ Form::hidden('abusedChild_id',$id)}}
        @else
           <div class="form-group">
		{{ Form::label('abusedChild_id', 'Abused Child') }}
		{{ Form::select('abusedChild_id', AbusedChild::all()->lists('id','id'),Input::old('abusedChild_id'), array('class' => 'form-control')) }}
	</div>
        @endif
	
        
        <div class="form-group">
		{{ Form::label('person_id', 'Person') }}
		{{ Form::select('person_id', Person::all()->lists('name','id'), Input::old('person_id'), array('class' => 'form-control')) }}
	</div>

         <div class="form-group">
		{{ Form::label('relationType_id', 'Relation Type') }}
		{{ Form::select('relationType_id', RelationType::all()->lists('type','id'), Input::old('relationType_id'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('custodian', 'Is He/She the Custodion of the Child') }}
		{{ Form::checkbox('custodian','1', Input::old('custodian'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('sameHouse', 'Do they belong to the same house?') }}
		{{ Form::checkbox('sameHouse', '1', Input::old('sameHouse'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('alias', 'Name of the person.') }}
		{{ Form::text('alias', Input::old('alias'), array('class' => 'form-control')) }}
	</div>


	{{ Form::submit('Create the relatives entry!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>

