@extends('layouts.main')

@section('content')
    <h1>the car</h1>

    <ul>
        @foreach($cars as $car)
        <li>
            <h3>{{ $car->modello }}</h3>
            <div>{{ $car->marca }}</div>
            <div>{{ $car->targa }}</div>
        </li>

        @endforeach
    </ul>
@endsection
