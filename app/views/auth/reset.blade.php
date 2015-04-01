@extends('layouts.master')

@section('title')

@stop

{{-- Content --}}

@section('content')

<div class="page-header">
    <h2>Forgot Password</h2>
</div>

{{Form::open(array('action'=>'RemindersController@postReset', 'class'=>'form-horizontal','method'=>'POST'))}}

<input type="hidden" name="token" value="{{$token}}">
<div class="control-group">
    {{Form::label('email','Email',array('class'=>'control-label','name'=>'email'))}}
    
    <div class="controls">
        {{Form::Text('email','email@domain.com')}}
    </div>
    
</div>
<div class="control-group">
    {{Form::label('password','Password',array('class'=>'control-label','type'=>'password','name'=>'password'))}}
    
    <div class="controls">
        {{Form::Text('password')}}
    </div>
    
</div>

<div class="control-group">
    {{Form::label('Confpassword','Password',array('class'=>'control-label','type'=>'password','name'=>'password_confirmation'))}}
    
    <div class="controls">
        {{Form::Text('Confpassword')}}
    </div>
    
</div>
<div class="control-group">
    {{Form::submit('Reset',array('class'=>'btn'))}}
</div>

{{Form::close()}}
@stop


