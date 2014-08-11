@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">List Cases</a></li>
<li><a href="{{{ URL::to('cases/create') }}}">Create Case</a></li>
@stop

