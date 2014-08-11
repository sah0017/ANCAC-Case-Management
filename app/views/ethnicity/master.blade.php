@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('ethnicity') }}}">List Ethnicities</a></li>
<li><a href="{{{ URL::to('ethnicity/create') }}}">Create Ethnicity</a></li>
@stop


