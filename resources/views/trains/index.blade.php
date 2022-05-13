@extends('layouts.main')

@section('title', "- trains")
    

@section('main-content')
    {{-- @dump($trains) --}}

    @foreach ($trains as $train)
        <div class="train-card">
            <h3>{{ $train->agency }}</h3>
            <p>Train infos:</p>
            <p>From {{ $train->departure_station }} to {{ $train->arrival_station }}</p>
            <p>Departure infos:</p>
            <p>Date and time: {{ $train->departure_date }} - {{ $train->departure_time }}</p>
            <p>Arrival infos:</p>
            <p>Date and time: {{ $train->arrival_date }} - {{ $train->arrival_time }}</p>
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