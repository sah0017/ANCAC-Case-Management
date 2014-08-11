@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('phones') }}}">List Phones</a></li>
<li><a href="{{{ URL::to('phones/create') }}}">Create Phone</a></li>
@stop
