@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('households') }}}">List Households</a></li>
<li><a href="{{{ URL::to('households/create') }}}">Create Household</a></li>
@stop
