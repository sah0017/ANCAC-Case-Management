@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('relatives') }}}">List Relatives</a></li>
<li><a href="{{{ URL::to('relatives/create') }}}">Create Relative</a></li>
@stop

