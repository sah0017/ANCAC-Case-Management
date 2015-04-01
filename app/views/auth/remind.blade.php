@extends('layouts.master')

@section('title')

@stop

{{-- Content --}}

@section('content')

<div class="page-header">
    <h2>Forgot Password</h2>
</div>

{{Form::open(array('action'=>'RemindersController@postRemind', 'class'=>'form-horizontal','method'=>'POST'))}}

<div class="control-group">
    {{Form::label('email','Email',array('class'=>'control-label'))}}
    
    <div class="controls">
        {{Form::Text('email','email@domain.com',array('name'=>'email'))}}
    </div>
    
</div>

<div class="control-group">
    {{Form::submit('Send',array('class'=>'btn'))}}
</div>

{{Form::close()}}
@stop

