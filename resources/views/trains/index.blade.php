@extends('layouts.main')

@section('title', "Trains list")
    

@section('main-content')
    {{-- @dump($trains) --}}

    @foreach ($trains as $train)
        <div class="train-card">
            <h3>{{ $train->company }}</h3>
            {{-- <a href="{{route("trains.show", $train->id)}}"> --}}
            <a href='{{url("/post/$train->id")}}'>
                <p>From {{ $train->departure_station }} to {{ $train->arrival_station }}</p>
            </a>
            <p>Departure time: {{ $train->departure_time }} - Arrival time: {{ $train->arrival_time }}</p>
            <div class="check-infos">
                <p>
                    In time: 
                    <span class="{{ $train->is_in_time ? "train-check bg-green" : "train-check bg-red" }}"></span>
                </p>
                <p> 
                    Circulating:
                    <span class="{{ $train->is_deleted ? "train-check bg-red" : "train-check bg-green" }}"></span>
                </p>
            </div>
        </div>
    @endforeach
@endsection