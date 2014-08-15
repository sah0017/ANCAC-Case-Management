@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('serviceType') }}}">List Service Types</a></li>
<li><a href="{{{ URL::to('serviceType/create') }}}">Create Service Type</a></li>
@stop

