@extends('layouts.main')

@section('title', "Trains list")
    

@section('main-content')
    {{-- @dump($trains) --}}

    @foreach ($trains as $train)
        <div class="train-card">
            <h3>{{ $train->agency }}</h3>
            <p>Train infos:</p>
            <p>From {{ $train->departure_station }} to {{ $train->arrival_station }}</p>
            <p>Departure infos:</p>
            <p>Date: {{ $train->departure_date }}</p>
            <p>Departure adn arrival time:</p>
            <p>Date and time: {{ $train->departure_time }} - {{ $train->arrival_time }}</p>
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