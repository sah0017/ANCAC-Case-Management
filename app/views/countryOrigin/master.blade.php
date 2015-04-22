@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('countryOrigin') }}}">List Country of Origin</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('countryOrigin/create') }}}">Create Country of Origin</a></li>
@endif
@stop
