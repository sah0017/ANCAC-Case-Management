@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('users') }}}">Users</a></li>
@stop

@section('title')
@parent
:: Home
@stop

@section('content')
<h1>Hello World!</h1>
<p>This page is created using a master template.</p>
<a href="admin">admin only page</a>
@stop