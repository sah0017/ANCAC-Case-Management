@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('school') }}}">List Schools</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('school/create') }}}">Create School</a></li>
@endif
@stop

