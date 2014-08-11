@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('DHRCases') }}}">List DHR Cases</a></li>
<li><a href="{{{ URL::to('DHRCases/create') }}}">Create DHR Case</a></li>
@stop


