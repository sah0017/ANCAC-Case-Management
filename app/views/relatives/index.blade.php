<!-- app/views/children/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('relatives') }}">relations</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('relatives') }}">View All relations</a></li>
		<li><a href="{{ URL::to('relatives/create') }}">Create a relation entry</a>
	</ul>
</nav>

<h1>all the relations</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
                        <td>ID</td>
                        <td>Abuse Child ID</td>
			<td>Type of relation</td>
			<td>Custodian</td>
                        <td>Same House</td>
			<td>Name of related person</td>
		</tr>
	</thead>
	<tbody>
	
	</tbody>
</table>


</div>
</body>
</html>

