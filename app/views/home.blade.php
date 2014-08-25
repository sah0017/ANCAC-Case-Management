@extends('layouts.master')

@section('nav')
<li><a href="{{{ URL::to('cases') }}}">Cases</a></li>
<li><a href="{{{ URL::to('users') }}}">Users</a></li>
<li><a href="{{{ URL::to('admin') }}}">Admin only page</a></li>
@stop

@section('title')
@parent
:: Home
@stop

@section('content')
<h1>Welcome to the ANCAC case manager.</h1>
<p>I hope you are having a great day.</p>

@if($case->isEmpty())
    <p>You have no open cases.
@else
    <h2>My open cases<span class="label label-info">{{$case->count()}}</span></h2>
    <table class="table table-striped table-bordered">
            <thead>
                    <tr>
                    <td>Number</td>
                    <td>Abused Child</td>
                    <td>Case Opened</td>
                    </tr>
            </thead>
            <tbody>
            @foreach($case as $key => $value)
                    <tr>
                            <td>{{ $value->caseNumber }}</td>
                            <td>{{ $value->abusedChild->personalInfo->name }}</td>
                            <td>{{ $value->caseOpened }}</td>





                            <!-- we will also add show, edit, and delete buttons -->
                            <td>

                                    <!-- delete the cases (uses the destroy method DESTROY /case/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                                    {{ Form::open(array('url' => 'cases/' . $value->id, 'class' => 'pull-left')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                            {{ Form::close() }}

                                    <!-- show the cases (uses the show method found at GET /case/{id} -->
                                    &nbsp;<a class="btn btn-small btn-success" href="{{ URL::to('cases/' . $value->id) }}">Case Details</a>

                                    <!-- edit this cases (uses the edit method found at GET /case/{id}/edit -->


                            </td>
                    </tr>
            @endforeach
            </tbody>
    </table>
@endif
@stop