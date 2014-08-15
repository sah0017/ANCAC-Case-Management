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
			<strong>School:</strong> {{ $child->school }}<br>
                        <strong>Origin Country:</strong> {{ $child->personalInfo->originCountry }}<br>
                        <strong>Special Needs:</strong>
                        @if ($child->personalInfo->specialNeeds)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>Disability:</strong>
                        @if ($child->personalInfo->disability)
                         yes
                        @else
                         no
                        @endif
                        <br>
			<strong>Language:</strong> {{ $child->personalInfo->language }}<br>
                        <strong>Address:</strong> {{ $child->personalInfo->address_id }}<br>
                        <strong>Household:</strong> {{ $child->personalInfo->household_id }}<br>
                        <strong>Ethnicity:</strong> {{ $child->personalInfo->ethnicity_id }}<br>

		</p>
	</div>

@stop