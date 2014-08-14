@extends('households.master')

@section('title')
@parent
:: Household
@stop

@section('content')

<h1>Household info</h1><a class="btn btn-small btn-info" href="household/edit">Edit</a>

	<div class="jumbotron text-left">
		<p>
                    <strong>Pets:</strong>{{ $household->pets }}<br>
                    <strong>Medicare:</strong>
                        @if ($household->medicare)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>All Kids:</strong>
                        @if ($household->allkids)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Free or Reduced Lunch:</strong>
                        @if ($household->freeOrReducedLunch)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>On Base:</strong>
                        @if ($household->onBase)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-tittel">Members</h4>
                            </div>
                            <div class="panel-body">
                        <table class="table">
                                    @foreach($household->persons as $key => $value)
                                    <tr>
                                        <td>{{ $value->name }}</td>

                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td>

                                           
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                            </div>
                        </div>


		</p>
	</div>

@stop