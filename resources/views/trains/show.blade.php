@extends('layouts.main')

@section('title', "Train detail")

@section('main-content')
    <div class="single-train">
        <p>{{ $train->company }}</p>
        <p>From {{ $train->departure_station }} to {{ $train->arrival_station }}</p>
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
@endsection