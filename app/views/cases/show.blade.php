@extends('cases.master')

@section('title')
@parent
:: Case
@stop

@section('content')

            <h1>Showing Case {{ $case->caseNumber }}</h1>

            <div>
                

                
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Child Info</h4>
                            </div>
                            <div class="panel-body">
                                <strong>Name </strong>{{$case->abusedChild->personalInfo->name}}<br>
                                <strong>Date of Birth </strong>{{$case->abusedChild->personalInfo->dob}}<br>
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id .'/child') }}">Show Details</a> 
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id .'/child/household') }}">Show Household</a>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Alleged Offender Info</h4>
                            </div>
                            <div style ="width: 100%; height: 150px; overflow: scroll">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Name</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($case->allegedOffenders as $key => $value)
                                    <tr>
                                        <td>{{ $value->personalInfo->name }}</td>

                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>

                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id . '/allegedOffenders') }}">Edit</a>
                                <a class="btn btn-small btn-info" href="{{ URL::to('allegedOffendes/' . $case->allegedAbuser_id . '/create') }}">Create</a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Abuses</h4>
                            </div>
                            <div style ="width: 100%; height: 200px; overflow: scroll">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Abuses Type</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($case->abuses as $key => $value)
                                        <tr>
                                            <td>{{ $value->type }}</td>

                                            <!-- we will also add show, edit, and delete buttons -->
                                            <td>

                                                <!-- delete the child (uses the destroy method DESTROY /children/{id} -->
                                                <!-- we will add this later since its a little more complicated than the first two buttons -->
                                                {{ Form::open(array('action' => array('CaseController@removeAbuseType', $case->id))) }}
                                                {{ Form::hidden('abuseType_id', $value->id) }}
                                                {{ Form::submit('X', array('class' => 'btn btn-warning')) }}
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                {{ Form::open(array('action' => array('CaseController@addAbuseType', $case->id), 'class' => 'form-inline')) }}



                                {{ Form::select('abuseType_id', AbuseType::all()->lists('type','id'), null, array('class' => 'form-control')) }}



                                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                {{ Form::close() }}

                            </div>
                        </div>
                  
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Case Info</h4>
                            </div>
                            <div class="panel-body">
                                <strong>Opened:</strong> {{ $case->caseOpened }}<br>
                                <strong>Status:</strong> {{ $case->status }}<br>
                                <strong>County:</strong> {{ $case->county->name }}<br>
                                <strong>Custody Issues:</strong>
                                @if ($case->custodyIssues)
                                Yes
                                @else
                                No
                                @endif<br>
                                <strong>IOReport:</strong>
                                @if ($case->IOReport)
                                Yes
                                @else
                                No
                                @endif<br>
                                <strong>Domestic Violence:</strong>
                                @if ($case->domesticViolence)
                                Yes
                                @else
                                No
                                @endif<br>
                                <strong>DV Prosecution:</strong>
                                @if ($case->prosecution)
                                Yes
                                @else
                                No
                                @endif<br>
                                <strong>Reporter:</strong> {{ $case->reporter }}<br>
                                <strong>Date of abuse:</strong> {{ $case->abuseDate }}<br>
                                <strong>Abuse Location:</strong> {{ $case->abuseLocation }}<br>
                                <strong>Reason for referral:</strong> {{ $case->referralReason }}<br>
                                <strong>DHR Determination:</strong> {{ $case->DHRDetermination }}<br>
                                <strong>Forensic Evaluation:</strong>
                                @if ($case->forensicEvaluation)
                                Yes
                                @else
                                No
                                @endif<br>
                                <strong>Charges filed:</strong> {{ $case->chargesFiled }}<br>
                                <strong>Agency reported to:</strong> {{ $case->agencyReportedTo }}<br>
                                <strong>Who spoke to the child:</strong> {{ $case->talkedToChild }}<br>
                                <strong>Reported Date:</strong> {{ $case->reportedDate }}<br>
                                
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id .'/edit') }}">Edit</a> 
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">MDT Workers</h4>
                            </div>
                            <div style ="width: 100%; height: 200px; overflow: scroll">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Worker Type</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($case->workers as $key => $value)
                                    <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->workerType->type }}</td>

                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>

                                            <!-- delete the child (uses the destroy method DESTROY /children/{id} -->
                                            <!-- we will add this later since its a little more complicated than the first two buttons -->
                                            {{ Form::open(array('action' => array('CaseController@removeWorker', $case->id))) }}
                                            {{ Form::hidden('worker_id', $value->id) }}
                                            {{ Form::submit('X', array('class' => 'btn btn-warning')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            <div class="panel-footer">
                                {{ Form::open(array('action' => array('CaseController@addWorker', $case->id), 'class' => 'form-inline')) }}



                                {{ Form::select('worker_id', Worker::all()->lists('name','id'), null, array('class' => 'form-control')) }}



                                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                {{ Form::close() }}
                                
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Relations</h4>
                            </div>
                            <table class="table"> 
                                <thead>
                                <tr>
                                    <td>Name</td>
                                        <td>Relationship Type</td>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($case->abusedChild->relations as $key => $value)
                                    <tr>
                                        <td>{{ $value->personalInfo->name }}</td>
                                        <td>{{ $value->relationType->type }}</td>

                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>

                                            <!-- delete the child (uses the destroy method DESTROY /children/{id} -->
                                            <!-- we will add this later since its a little more complicated than the first two buttons -->
                                        {{ Form::open(array('url' => 'relatives/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('X', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id . '/child/relations') }}">List Relations</a>
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id . '/child/relations/create') }}">Add Relation</a>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Services Provided</h4>
                            </div>
                            <table class="table"> 
                                <tbody>
                                    @foreach($case->abusedChild->sessions as $key => $value)
                                    <tr>
                                        <td>{{ $value->serviceType_id }}</td>

                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>

                                            <!-- delete the child (uses the destroy method DESTROY /children/{id} -->
                                            <!-- we will add this later since its a little more complicated than the first two buttons -->
                                        {{ Form::open(array('url' => 'session/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('X', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id . '/child/session') }}">List Sessions</a>
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id . '/child/session/create') }}">Create Sessions</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Notes</h4>
                            </div>
                            <div class="panel-body">
                                {{$case->note}}
                            </div>     
                        </div>

                        
                    </div>
                </div>
            </div>
   @stop
