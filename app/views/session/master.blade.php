@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('session') }}}">List Sessions</a></li>
<li><a href="{{{ URL::to('session/create') }}}">Create Session</a></li>
@stop

