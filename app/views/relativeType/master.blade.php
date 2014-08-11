@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('relativeType') }}}">List Relative Types</a></li>
<li><a href="{{{ URL::to('relativeType/create') }}}">Create Relative Type</a></li>
@stop

