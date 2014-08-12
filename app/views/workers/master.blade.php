@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('workers') }}}">List Workers</a></li>
<li><a href="{{{ URL::to('workers/create') }}}">Create Worker</a></li>
@stop
