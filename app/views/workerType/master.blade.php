@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('workerType') }}}">List Worker Types</a></li>

@if( UserController::getLevel() == 3 )
<li><a href="{{{ URL::to('workerType/create') }}}">Create Worker Type</a></li>
@endif
@stop

