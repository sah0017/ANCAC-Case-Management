@extends('households.master')

@section('title')
@parent
:: Household
@stop

@section('content')

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