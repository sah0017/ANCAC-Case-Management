@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('MDTReport') }}}">MDT Report</a></li>
<li><a href="{{{ URL::to('MDTReport/create') }}}">Create MDT Report</a></li>
@stop