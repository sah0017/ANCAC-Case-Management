@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('workerType') }}}">List Worker Types</a></li>
<li><a href="{{{ URL::to('workerType/create') }}}">Create Worker Type</a></li>
@stop

