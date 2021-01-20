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

    <section id="app">
        <h3>Bikes</h3>
        <ul>
            <li v-for='bike in bikes'>
                <h2>@{{bike.modello}}</h2>
                <div>@{{bike.marca}}</div>
                <div>@{{bike.targa}}</div>
            </li>
        </ul>
    </section>


    <!-- {{-- JS --}} -->
    <script src="{{asset('js/app.js')}}"></script>