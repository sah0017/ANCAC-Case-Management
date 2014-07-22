<html>
    <head>
        <title>Look! I'm CRUDding</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/show.css">
    </head>
    <style>

    </style>
    <body>

        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('cases') }}">Case info</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('cases') }}">View All Cases</a></li>
                    <li><a href="{{ URL::to('cases/create') }}">Create a Case Type</a>
                </ul>
            </nav>

            <h1>Showing case {{ $case->id }}</h1>

            <div>
                

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Child Info</h4>
                            </div>
                            <div class="panel-body">
                                <strong>Name </strong>{{$case->abusedChild->personalInfo->name}}<br>
                                <strong>Date of birth </strong>{{$case->abusedChild->personalInfo->dob}}<br>
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('children/' . $case->abusedChild_id . '/edit') }}">Edit this child</a> 
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Alleged Abuser Info</h4>
                            </div>
                            <div class="panel-body">
                                <strong>Name </strong><br>
                                <strong>Date of birth </strong>
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('allegedAbusers/' . $case->allegedAbuser_id . '/edit') }}">Edit this abuser</a> 
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Case Info</h4>
                            </div>
                            <div class="panel-body">
                                <strong>opened:</strong> {{ $case->caseOpened }}<br>
                                <strong>status:</strong> {{ $case->status }}
                            </div>
                            <div class="panel-footer">
                                <?php echo Form::submit('edit'); ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Workers</h4>
                            </div>
                            <table class="table"> 
                                <tr>
                                    <td>Name</td>
                                    <td>Type</td>
                                </tr>
                            </table>
                            <div class="panel-footer">
                                <?php echo Form::submit('edit'); ?>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Relations</h4>
                            </div>
                            <table class="table"> 
                                <tr>
                                    <td>Name</td>
                                    <td>Type</td>
                                </tr>
                            </table>
                            <div class="panel-footer">
                                <a class="btn btn-small btn-info" href="{{ URL::to('relatives/' . $case->id . '/edit') }}">Edit this relations</a>
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
                    <div class="col-lg-12">
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