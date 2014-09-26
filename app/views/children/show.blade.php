@extends('children.master')

@section('title')
@parent
:: Children
@stop

@section('content')

<h1>Showing {{ $child->personalInfo->name }}</h1><a class="btn btn-small btn-info" href="child/edit">Edit</a> 
<a class="btn btn-small btn-success" href=".">Back to Dashboard</a>

	<div class="jumbotron text-left">
		<h2>{{ $child->name }}</h2>
		<p>
			<strong>Name:</strong> {{ $child->personalInfo->name }}<br>
                        <strong>DOB:</strong> {{ $child->personalInfo->dob }}<br>
                        <strong>Ethnicity:</strong> {{ $child->personalInfo->ethnicity->ethnicity }}<br>
			<strong>Parental History:</strong> {{ $child->parentalHistory }}<br>
                        <strong>Parent Status:</strong> {{ $child->parentStatus }}<br>
                        <strong>Medical Completed:</strong>
                        @if ($child->medicalCompleted)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>School Grade:</strong> {{ $child->schoolGrade }}<br>
			<strong>School:</strong> {{ $child->school1->name }}<br>
                        <strong>Origin Country:</strong> {{ $child->personalInfo->country->name }}<br>
                        <strong>Special Needs:</strong> {{$child->personalInfo->specialNeeds}}<br>
			<strong>Language:</strong> {{ $child->personalInfo->language }}<br>
                        <strong>Address:</strong> {{ $child->personalInfo->address->line1 }}<br>
                        {{$child->personalInfo->address->line2 }}<br>
                        {{$child->personalInfo->address->city }}<br>
                        {{$child->personalInfo->address->state }}<br>
                        {{$child->personalInfo->address->zip }}<br>
                        

		</p>
	</div>

@stop