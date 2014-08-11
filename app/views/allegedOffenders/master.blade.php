@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('allegedOffenders') }}}">List Alleged Offenders</a></li>
<li><a href="{{{ URL::to('allegedOffenders/create') }}}">Create Alleged Offender</a></li>
@stop

