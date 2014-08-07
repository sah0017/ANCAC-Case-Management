@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('users') }}}">List Users</a></li>
<li><a href="{{{ URL::to('users/create') }}}">Create User</a></li>
@stop