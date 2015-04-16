@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('relativeType') }}}">List Relative Types</a></li>

@if( UserController::getLevel() == 3 )
   <li><a href="{{{ URL::to('relativeType/create') }}}">Create Relative Type</a></li>
@endif
@stop

