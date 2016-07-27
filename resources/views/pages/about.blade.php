@extends('app')
@section('content')
    <h1>About me</h1>
    <p>
    @if ($first == 'Chen')
    I'm  {{ $first }} {{ $last }}.
    @endif
    @if (count($people))
    <h3>People I like:</h3>
    <ul>
    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach
    </ul>
    @endif
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
    no sea takimata sanctus est Lorem ipsum dolor sit amet.
    </p>
@endsection
