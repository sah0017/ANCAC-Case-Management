@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('countryOrigen') }}}">List Country of Origen</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('countryOrigen/create') }}}">Create Country of Origen</a></li>
@endif
@stop
