@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('abuseTypes') }}}">List Abuse Types</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('abuseTypes/create') }}}">Create Abuse Types</a></li>
@endif
@stop