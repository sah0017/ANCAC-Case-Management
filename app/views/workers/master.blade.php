@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('workers') }}}">List Workers</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('workers/create') }}}">Create Worker</a></li>
@endif
@stop
