@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('address') }}}">List Address</a></li>
<li><a href="{{{ URL::to('address/create') }}}">Create Address</a></li>
@stop
