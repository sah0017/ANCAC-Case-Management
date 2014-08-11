@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('children') }}}">List Children</a></li>
<li><a href="{{{ URL::to('children/create') }}}">Create Children</a></li>
@stop
