@extends ('layouts.app')

@section ('content')

<h1>Welcome</h1>

<ul>

    @foreach ($trains as $train)

    <li>{{ $train->departure_station}}</li>

    @endforeach

</ul>

@endsection