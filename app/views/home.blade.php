@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('users') }}}">Users</a></li>
<li><a href="{{{ URL::to('admin') }}}">Admin only page</a></li>
@stop

@section('title')
@parent
:: Home
@stop

@section('content')
<h1>Welcome to the ANCAC case manager.</h1>
<p>I hope you are having a great day.</p>
@stop