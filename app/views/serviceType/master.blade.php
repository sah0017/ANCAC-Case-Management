@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('serviceType') }}}">List Service Types</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('serviceType/create') }}}">Create Service Type</a></li>
@endif
@stop

