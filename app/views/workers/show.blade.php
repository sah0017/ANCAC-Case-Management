@extends('workers.master')

@section('title')
@parent
:: Worker
@stop

@section('content')

    <h1>Showing {{ $worker->name }}</h1>

	<div class="jumbotron text-left">
		<h2>{{ $worker->name }}</h2>
		<p>
			<strong>Name of Worker:</strong> {{ $worker->name }}<br>
                        

		</p>
	</div>

</div>
</body>
</html>