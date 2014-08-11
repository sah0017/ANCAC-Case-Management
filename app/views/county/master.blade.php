@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('county') }}}">List Counties</a></li>
<li><a href="{{{ URL::to('county/create') }}}">Create County</a></li>
@stop
