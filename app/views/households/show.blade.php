<html>
<head>
	<title>ANCAC Households</title>
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


		</p>
	</div>

</div>
</body>
</html>