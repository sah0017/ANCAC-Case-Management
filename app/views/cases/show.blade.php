@extends('cases.master')

@section('title')
@parent
:: Case
@stop

@section('content')

            <h1>Showing Case {{ $case->id }}</h1>

            <div>
                

                <div class="row">
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
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Alleged Abuser Info</h4>
                            </div>
                            <div class="panel-body">
                                <strong>Name </strong><br>
                                <strong>Date of Birth </strong>
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('cases/' . $case->id . '/allegedOffenders') }}">Edit</a>
                                <a class="btn btn-small btn-info" href="{{ URL::to('allegedOffendes/' . $case->allegedAbuser_id . '/create') }}">Create</a>
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
                                <strong>Status:</strong> {{ $case->status }}
                            </div>
                            <div class="panel-footer">
                                <?php echo Form::submit('edit'); ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Workers</h4>
                            </div>
                            <p style ="width: 100%; height: 200px; overflow: scroll">
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
                        </p>
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
                                        <td>{{ $value->alias }}</td>
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
                                <tr>

                                </tr>
                            </table>
                            <div class="panel-footer">
                                <?php echo Form::submit('edit'); ?>
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
    </body>
</html>
