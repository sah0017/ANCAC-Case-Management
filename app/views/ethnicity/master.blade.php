@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('ethnicity') }}}">List Ethnicities</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('ethnicity/create') }}}">Create Ethnicity</a></li>
@endif
@stop


