<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('households') }}">Household</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('households') }}">View All Households</a></li>
		<li><a href="{{ URL::to('households/create') }}">Create a Household</a>
	</ul>
</nav>

<h1>Showing {{ $household->id }}</h1>

	<div class="jumbotron text-left">
		<p>
                    <strong>pets:</strong>{{ $household->pets }}<br>
                    <strong>medicare:</strong>
                        @if ($household->medicare)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>allkids:</strong>
                        @if ($household->allkids)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>free Or Reduced Lunch:</strong>
                        @if ($household->freeOrReducedLunch)
                         yes
                        @else
                         no
                        @endif
                        <br>
                        <strong>on Base:</strong>
                        @if ($household->onBase)
                         yes
                        @else
                         no
                        @endif
                        <br>


		</p>
	</div>

</div>
</body>
</html>